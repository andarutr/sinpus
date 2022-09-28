<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function detail()
    {
        return view('pages.sinpus.book.detail');
    }
}
