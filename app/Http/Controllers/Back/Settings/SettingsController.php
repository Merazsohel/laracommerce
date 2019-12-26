<?php

namespace App\Http\Controllers\Back\Settings;

use App\CustomClasses\ManageImage;
use App\Setting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('role');
    }

    public function index()
    {
        $settings = Setting::all();
        return view('back.settings.index', compact('settings'));
    }

    public function create()
    {
        return view('back.settings.create');
    }

    public function store(Request $request)
    {
        Setting::insert([
            'site_title' => $request->site_title,
            'site_logo' => ManageImage::insertImage('public/image/site-logo', $request->site_logo),
            'favicon' => ManageImage::insertImage('public/image/favicon', $request->favicon),
            'address' => $request->address,
            'facebook_link' => $request->facebook_link,
            'twitter_link' => $request->twitter_link,
            'instagram_link' => $request->instagram_link,
            'linkedIn_link' => $request->linkedIn_link,
            'copyright_text' => $request->copyright_text,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return redirect()->back()->with('success', 'Record Successfully Inserted !!!');
    }

    public function edit($id)
    {
        $setting = Setting::find($id);
        return view('back.settings.edit', compact('setting'));
    }

    public function update(Request $request, $id)
    {
        if ($request->hasFile('site_logo')) {
            $data = Setting::select('site_logo')->where('id', $id)->first();
            ManageImage::deleteImage('public/image/site-logo/' . $data->site_logo);
            Setting::where('id', $id)->update([
                'photo' => ManageImage::insertImage('public/image/site-logo', $request->site_logo)
            ]);
        }

        if ($request->hasFile('favicon')) {
            $data = Setting::select('favicon')->where('id', $id)->first();
            ManageImage::deleteImage('public/image/favicon/' . $data->favicon);
            Setting::where('id', $id)->update([
                'photo' => ManageImage::insertImage('public/image/favicon', $request->favicon)
            ]);
        }


        Setting::where('id', $id)->update([
            'site_title' => $request->site_title,
            'address' => $request->address,
            'facebook_link' => $request->facebook_link,
            'twitter_link' => $request->twitter_link,
            'instagram_link' => $request->instagram_link,
            'linkedIn_link' => $request->linkedIn_link,
            'copyright_text' => $request->copyright_text,
            'mobile' => $request->mobile,
            'email' => $request->email,
        ]);

        return redirect()->back()->with('success', 'Record Successfully Updated.');
    }

    public function destroy($id)
    {
        $siteLogo = Setting::select('site_logo')->where('id', $id)->first();
        ManageImage::deleteImage('public/image/site-logo/' . $siteLogo->site_logo);

        $favicon = Setting::select('favicon')->where('id', $id)->first();
        ManageImage::deleteImage('public/image/favicon/' . $favicon->favicon);

        Setting::find($id)->delete();

        return redirect()->back()->with('success', 'Record Deleted Updated.');
    }
}
