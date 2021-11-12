<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeWorkController extends Controller
{
    public function homePage()
    {
        return view('homework.index');
    }
}
