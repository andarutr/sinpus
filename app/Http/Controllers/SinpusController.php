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

    // Category
    public function category()
    {
        return view('pages.sinpus.category');
    }

    // Book
    public function book()
    {
        return view('pages.sinpus.book');
    }
}
