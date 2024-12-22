<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\IndexHint;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)

    {
        return view('pages.home');
    }
}
