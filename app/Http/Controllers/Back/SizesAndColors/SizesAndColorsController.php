<?php

namespace App\Http\Controllers\Back\SizesAndColors;

use App\Color;
use App\Size;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SizesAndColorsController extends Controller
{
    public function createColor(){
        return view('back.colors.create_color');
    }

    public function storeColor(Request $request)
    {
        Color::insert([
            'color' => $request->color,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return redirect()->back()->with('success', 'Record Successfully Inserted !!!');
    }


    public function createSize(){
        return view('back.sizes.create_size');
    }

    public function storeSize(Request $request)
    {
        Size::insert([
            'name' => $request->name,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return redirect()->back()->with('success', 'Record Successfully Inserted !!!');
    }

    public function allColors()
    {
        $colors = Color::all();
        return view('back.colors.color_list', compact('colors'));
    }

    public function editColor($id)
    {
        $color = Color::find($id);
        return view('back.colors.edit', compact('color'));
    }

    public function updateColor(Request $request, $id){
        Color::where('id', $id)->update([
            'color' => $request->color,
            'updated_at' => Carbon::now()
        ]);

        return redirect()->back()->with('success', 'Record Successfully Updated.');
    }

    public function destroyColor($id)
    {
        $color = Color::select('color')->where('id', $id)->first();

        Color::find($id)->delete();

        return redirect()->back()->with('success', 'Record Deleted.');
    }

    public function allSizes()
    {
        $sizes = Size::all();
        return view('back.sizes.size_list', compact('sizes'));
    }

    public function editSize($id)
    {
        $size = Size::find($id);
        return view('back.sizes.edit', compact('size'));
    }

    public function updateSize(Request $request, $id){
        Size::where('id', $id)->update([
            'name' => $request->name,
            'updated_at' => Carbon::now()
        ]);

        return redirect()->back()->with('success', 'Record Successfully Updated.');
    }

    public function destroySize($id)
    {
        $size = Size::select('name')->where('id', $id)->first();

        Size::find($id)->delete();

        return redirect()->back()->with('success', 'Record Deleted.');
    }
}
