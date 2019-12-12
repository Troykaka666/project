<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homeIndex()
    {
        return view('pages/home');
    }
}
