<?php

namespace App\Http\Controllers\User;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HistoryController extends Controller
{
	public function index()
	{
		$histories_pinjam = \DB::table('pinjam')
								->orderByDesc('id_pinjam')
								->where('id_user', Auth::user()->id)
								->join('books','books.id_book','=','pinjam.id_book')
								->join('status_buku', 'books.id_statusbuku', '=', 'status_buku.id_statusbuku')
								->get();
		$histories_pengembalian = \DB::table('kembalikan')
										->orderByDesc('id_kembalikan')
										->where('id_user', Auth::user()->id)
										->join('books','kembalikan.id_book','=','books.id_book')
										->get();
		$pinjam = \DB::table('pinjam')
						->where('id_user', Auth::user()->id)
						->get();

		return view('pages.sinpus.user.history.list', compact('histories_pinjam','histories_pengembalian','pinjam'));
	}
}