<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homeIndex()
    {
        return view('pages/home');
    }

    public function snmdex()
    {
        return view('example/snmdEx');
    }

    public function contactex()
    {
        return view('/pages/contact/create');
    }
}
