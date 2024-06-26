<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return view('dashboard');
    }

    public function layanan()
    {
        return view('layanan');
    }

    public function kontak()
    {
        return view('kontak');
    }
}
 