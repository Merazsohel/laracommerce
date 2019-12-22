<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{

    public function create(Request $request){
        $data = [];
        $data['customer'] = $request->customer;
        $data['product_id'] = $request->product_id;
        $data['review'] = $request->review;
        $data['created_at'] = Carbon::now();

        DB::table('reviews')->insert($data);

        return redirect()->back();

    }

}
