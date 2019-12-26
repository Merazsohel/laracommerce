<?php

namespace App\Http\Controllers\Back\Advertisement;

use App\Advertisement;
use Illuminate\Http\Request;
use App\CustomClasses\ManageImage;
use App\Http\Controllers\Controller;

class AdvertisementController extends Controller
{

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


    public function create()
    {
        return view('back.advertisement.create');
    }


    public function store(Request $request)
    {
        Advertisement::insert([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'link' => $request->link,
            'position' => $request->position,
            'photo' => ManageImage::insertImage('public/image/advertisement-images', $request->photo)
        ]);
        return redirect()->back()->with('success', 'Record Successfully Inserted !!!.');
    }


    public function edit($id)
    {
        $advertisement = Advertisement::find($id);
        return view('back.advertisement.edit', compact('advertisement'));
    }

    public function update(Request $request, $id)
    {
        if ($request->hasFile('photo')) {
            $data = Advertisement::select('photo')->where('id', $id)->first();
            ManageImage::deleteImage('public/image/advertisement-images/' . $data->photo);
            Advertisement::where('id', $id)->update([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'link' => $request->link,
                'position' => $request->position,
                'photo' => ManageImage::insertImage('public/image/advertisement-images', $request->photo)
            ]);
        }

        Advertisement::where('id', $id)->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'link' => $request->link,
            'position' => $request->position
        ]);
        return redirect(route('advertisementindex'))->with('success', 'Recored Successfully Updated.');
    }


    public function destroy($id)
    {
        $data = Advertisement::select('photo')->where('id', $id)->first();
        Advertisement::find($id)->delete();
        ManageImage::deleteImage('public/image/advertisement-images/' . $data->photo);
        return redirect()->back()->with('success', 'Record Successfully Deleted ');
    }
}
