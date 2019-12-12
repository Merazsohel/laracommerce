<?php

namespace App\Http\Controllers\Back\Admin;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $admins=Admin::with('roles')->get();
        return view('back.admin.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = DB::table('roles')->get();
        return view('back.admin.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['password']=bcrypt($request->password);
        $id = Admin::create($request->except('_token', 'role_id'));
        foreach($request->role_id as $role_id)
        {
            DB::table('admin_role')->insert(['admin_id' => $id->id, 'role_id' => $role_id]);
        }

        return redirect()->back()->with('success','Record Successfully Inserted ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $roles = DB::table('roles')->get();
        //$admin = Admin::find($id)->first();
       $admin = Admin::with('roles')->where('id', $id)->first();
        return view('back.admin.edit', compact('admin', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Admin::find($id)->update([
            'firstName' =>  $request->firstName,
            'lastName' =>  $request->lastName,
            'email' =>  $request->email,
            'password' =>  Hash::make($request->password)
        ]);

        DB::table('admin_role')->where('admin_id', $id)->delete();

        if(is_array($request->role_id))
       {
            foreach($request->role_id as $role_id)
            {
                DB::table('admin_role')->insert(['admin_id' => $id, 'role_id' => $role_id]);
            }
        }

        return redirect()->back()->with('success','Record Successfully Inserted ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Admin::find($id)->delete();
        return  redirect(route('adminindex'))->with('success','Record Successfully Inserted ');
    }
}
