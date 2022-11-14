<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RingkasanController extends Controller
{
	public function index()
	{
		$menu = 'Ringkasan';
		return view('pages.admin.ringkasan.list', compact('menu'));
	}

	public function show($id)
	{
		$menu = 'Ringkasan';
		$peringkas = \DB::table('meringkas')
							->where('id_meringkas',$id)
							->join('users','meringkas.id_user','=','users.id')
							->join('books','meringkas.id_book','=','books.id_book')
							->first();

		return view('pages.admin.ringkasan.show', compact('menu','peringkas'));
	}
}