<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;
use App\Models\User;

class AdminController extends Controller
{
    public function main()
    {
        $users = User::all();
        $ads = Ad::all();
        return view('components.admin', ['users' => $users, 'ads' => $ads]);
    }


    public function deletead($id)
    {
        $adDelete = Ad::find($id);
        if ($adDelete != null)
        {
            $adDelete->delete();
        }

        $users = User::all();
        $ads = Ad::all();

        return redirect()->route('admin', ['users' => $users, 'ads' => $ads]);
    }
}
