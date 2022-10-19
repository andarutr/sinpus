<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HistoryController extends Controller
{
	public function index()
	{
		$menu = 'History';
		$histories_pinjam = \DB::table('pinjam')
								->join('books','pinjam.id_book','=','books.id_book')
								->join('status_buku', 'books.id_statusbuku', '=', 'status_buku.id_statusbuku')
								->join('users','pinjam.id_user','=','users.id')
								->get();
		$histories_pengembalian = \DB::table('kembalikan')
									->orderByDesc('id_kembalikan')
									->join('books','kembalikan.id_book','=','books.id_book')
									->join('users','kembalikan.id_user','=','users.id')
									->get();
		$pinjam = \DB::table('pinjam')->get();

		return view('pages.admin.history.list', compact('menu','histories_pinjam','histories_pengembalian','pinjam'));
	}
}