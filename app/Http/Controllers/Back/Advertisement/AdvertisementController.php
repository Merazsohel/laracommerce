<?php

namespace App\Http\Controllers\Back\Advertisement;

use App\Advertisement;
use Illuminate\Http\Request;
use App\CustomClasses\ManageImage;
use App\Http\Controllers\Controller;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('role');
    }

    public function index()
    {
        $advertisements = Advertisement::all();
        return view('back.advertisement.index', compact('advertisements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.advertisement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Advertisement::insert([
            'title'=>$request->title,
            'subtitle'=>$request->subtitle,
            'link'=>$request->link,
            'position'=>$request->position,
            'photo'=>ManageImage::insertImage('image/advertisement-images',$request->photo)
            ]);
        return redirect()->back()->with('success','Record Successfully Inserted !!!.');
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
        $advertisement = Advertisement::find($id);
        return view ('back.advertisement.edit',compact('advertisement'));
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
        if($request->hasFile('photo')){
            $data = Advertisement::select('photo')->where('id', $id)->first();
            ManageImage::deleteImage('image/advertisement-images/'.$data->photo);
            Advertisement::where('id',$id)->update([
                'title'=>$request->title,
                'subtitle'=>$request->subtitle,
                'link'=>$request->link,
                'position'=>$request->position,
                'photo'=>ManageImage::insertImage('image/advertisement-images',$request->photo)
                ]);
        }
        
        Advertisement::where('id',$id)->update([
            'title'=>$request->title,
            'subtitle'=>$request->subtitle,
            'link'=>$request->link,
            'position'=>$request->position
            ]);
        return redirect(route('advertisementindex'))->with('success','Recored Successfully Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Advertisement::select('photo')->where('id', $id)->first();
        Advertisement::find($id)->delete();
        ManageImage::deleteImage('image/advertisement-images/'.$data->photo);
        return  redirect()->back()->with('success','Record Successfully Deleted ');
    }
}
