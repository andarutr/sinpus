<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinpusController extends Controller
{
    // Home
    public function index()
    {
        return view('pages.sinpus.home');
    }
}
