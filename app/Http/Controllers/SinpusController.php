<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinpusController extends Controller
{
    // Home
    public function index()
    {
        $category = \DB::table('category')->get();
        return view('pages.sinpus.home', compact('category'));
    }

    // Category
    public function category()
    {
        $category = \DB::table('category')->get();
        return view('pages.sinpus.category', compact('category'));
    }

    // Book
    public function book()
    {
        return view('pages.sinpus.book');
    }
}
