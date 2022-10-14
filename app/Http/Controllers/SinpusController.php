<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinpusController extends Controller
{
    // Home
    public function index()
    {
        $category = \DB::table('category')->get();
        $books = \DB::table('books')->orderByDesc('id_book')->limit(4)->get();

        return view('pages.sinpus.home', compact('category','books'));
    }

    // Category
    public function category()
    {
        $category = \DB::table('category')->get();
        return view('pages.sinpus.category', compact('category'));
    }
}
