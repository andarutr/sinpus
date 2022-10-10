<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    // Book
    public function book()
    {
        $books = \DB::table('books')->get();
        return view('pages.sinpus.book.all', compact('books'));
    }

    // ByCategory
    public function category($url)
    {
        $category = \DB::table('category')
                        ->where('url_category', $url)
                        ->first();
        $books = \DB::table('books')
                    ->join('category', 'books.id_category', '=', 'category.id_category')
                    ->get();
        return view('pages.sinpus.book.category', compact('category','books'));
    }

    // Detail 
    public function detail($url)
    {
        $book = \DB::table('books')
                    ->join('category', 'books.id_category', '=', 'category.id_category')
                    ->where('url_book',$url)
                    ->first();
        return view('pages.sinpus.book.detail', compact('book'));
    }
}
