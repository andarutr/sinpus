<?php

namespace App\Http\Controllers\User;

use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PengembalianBukuController extends Controller
{
	public function index()
	{
		return view('pages.sinpus.user.pengembalian-buku');
	}

	protected function store(Request $req,$url)
	{
		$book = \DB::table('books')
					->where('url_book',$url)
					->first();

		if($book->id_statusbuku == 3)
		{
			$book_status = \DB::table('books')
							->where('url_book',$url)
							->update([
								'id_statusbuku' => 4
							]);

			$kembalikan_buku = \DB::table('kembalikan')
								->insert([
									'id_user' => Auth::user()->id,
									'id_book' => $book->id_book,
									'tanggal_pengembalian' => Carbon::now(),
									'updated_at' => Carbon::now()->toDateTimeString(),
									'created_at' => Carbon::now()->toDateTimeString(),
								]);
			
			$notification = \DB::table('notifications')
				->insert([
					'id_user' => Auth::user()->id,
					'id_book' => $book->id_book,
					'do_notif' => 'mengembalikan',
					'updated_at' => now(),
					'created_at' => now()
				]);

			return view('pages.sinpus.user.status.success_2');
		}else{
			return view('pages.sinpus.user.status.failed');
		}
	}
}