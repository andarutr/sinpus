<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    // Book
    public function book()
    {
        return view('pages.sinpus.book.all');
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
                    ->where('url_book',$url)
                    ->join('category', 'books.id_category', '=', 'category.id_category')
                    ->join('status_buku', 'books.id_statusbuku', '=', 'status_buku.id_statusbuku')
                    ->first();
        return view('pages.sinpus.book.detail', compact('book'));
    }
}
