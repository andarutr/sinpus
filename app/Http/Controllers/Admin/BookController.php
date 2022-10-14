<?php

namespace App\Http\Controllers\Admin;

use Spatie\Image\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
	public function index()
	{
		$menu = 'Book';
		$books = \DB::table('books')
					->orderByDesc('id_book')
					->get();
		return view('pages.admin.book.list', compact('menu','books'));
	}
}