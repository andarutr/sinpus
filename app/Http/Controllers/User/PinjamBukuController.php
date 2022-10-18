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
									'updated_at' => Carbon::now()->toDateTimeString(),
									'created_at' => Carbon::now()->toDateTimeString(),
								]);
								
			return view('pages.sinpus.user.status.success_1');
		}else{
			return view('pages.sinpus.user.status.failed');
		}
	}
}