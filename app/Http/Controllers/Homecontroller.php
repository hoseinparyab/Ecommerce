<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Homecontroller extends Controller
{
    public function index()
    {
        return view('home.master');
    }

    public function redirect()
    {
        $userType = Auth::user()->usertype;
        if ($userType == '1') {
            return view('admin.home');
        } else {
            return view('home.master');
        }
    }
}
