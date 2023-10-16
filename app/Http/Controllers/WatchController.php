<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;

class WatchController extends Controller
{
    public function watch() 
    {
        $ads = Ad::orderBy('created_at', 'desc')->get();

        return view('/components.watch', ['ads' => $ads]);
    }

    public function watchCategory($category)
    {
        $ads = Ad::where('category', $category)->get();

        return view('/components.watchcategory', ['ads' => $ads, 'category' => $category]);
    }
}
