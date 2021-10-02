<?php

namespace App\Http\Controllers;
use App\Galeri;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {
        return view('user/index');
    }

    public function galery()
    {
        $galeri = Galeri::all();
        return view('user.galery',compact('galeri'));
    }

    public function contact()
    {
        return view('user/contact');
    }

    public function about()
    {
        return view('user.about');
    }

    public function team()
    {
        return view('user/team');
    }
    
    public function login()
    {
        return view('auth/login');
    }
}
