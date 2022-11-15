<?php

namespace App\Http\Controllers\User;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MeringkasController extends Controller
{
	public function index()
	{
		return view('pages.sinpus.user.meringkas.list');
	}

	public function create($url)
	{
		$book = \DB::table('books')
					->where('url_book',$url)
					->first();
		return view('pages.sinpus.user.meringkas.create', compact('book'));
	}

	protected function store(Request $req, $url)
	{
		$this->validate($req, [
			'ringkasan' => 'required|min:1000'
		]);
		$book = \DB::table('books')
					->where('url_book',$url)
					->first();
		
		if($book->id_statusbuku === 3)
		{
			$meringkas = \DB::table('meringkas')
							->insert([
								'id_book' => $book->id_book,
								'id_user' => Auth::user()->id,
								'ringkasan' => $req->ringkasan,
								'total_kata' => \Str::length($req->ringkasan),
								'updated_at' => now(),
								'created_at' => now()
							]);
			return 	view('pages.sinpus.user.status.success_3');
		}else{
			return "Incorrect";
		}
	}

	public function edit($url)
	{
		$book = \DB::table('books')
					->where('url_book',$url)
					->first();
		$ringkasan = \DB::table('meringkas')
						->where(['id_book' => $book->id_book, 'id_user' => Auth::user()->id])
						->first();

		return view('pages.sinpus.user.meringkas.edit', compact('book','ringkasan'));
	}

	protected function update(Request $req, $url)
	{
		$this->validate($req, [
			'ringkasan' => 'required|min:1000'
		]);
		$book = \DB::table('books')
					->where('url_book',$url)
					->first();
		
		if($book->id_statusbuku === 3)
		{
			$meringkas = \DB::table('meringkas')
							->where(['id_book' => $book->id_book, 'id_user' => Auth::user()->id])
							->update([
								'ringkasan' => $req->ringkasan,
								'total_kata' => \Str::length($req->ringkasan),
								'updated_at' => now(),
							]);
			return 	view('pages.sinpus.user.status.success_4');
		}else{
			return "Incorrect";
		}
	}
}