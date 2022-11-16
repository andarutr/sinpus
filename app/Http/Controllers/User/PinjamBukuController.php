<?php

namespace App\Http\Controllers\User;

use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PinjamBukuController extends Controller
{
	protected function store(Request $req,$url)
	{
		$book = \DB::table('books')
					->where('url_book',$url)
					->first();

		if($book->id_statusbuku === 1)
		{
			$book_status = \DB::table('books')
							->where('url_book',$url)
							->update([
								'id_statusbuku' => 2
							]);

			$pinjam_buku = \DB::table('pinjam')
								->insert([
									'id_user' => Auth::user()->id,
									'id_book' => $book->id_book,
									'updated_at' => now(),
									'created_at' => now()
								]);

			$notification = \DB::table('notifications')
								->insert([
									'id_user' => Auth::user()->id,
									'id_book' => $book->id_book,
									'do_notif' => 'meminjam',
									'updated_at' => now(),
									'created_at' => now()
								]);

			return view('pages.sinpus.user.status.success_1');
		}else{
			return view('pages.sinpus.user.status.failed');
		}
	}
}