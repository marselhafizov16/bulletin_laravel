<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;
use App\Models\User;

class CreateController extends Controller
{
    public function watch() 
    {
        return view();
    }

    public function store(Request $request) 
    {
        if ($request->has('category') && $request->has('ad')) 
        {
            $ad = new Ad;
            $ad->category = $request->input('category');
            $ad->ad = $request->input('ad');
            $ad->user_id = $request->user()->id;
            $ad->save();
        }

        return view('/dashboard');
    }
}
