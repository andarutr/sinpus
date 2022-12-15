<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PoinkuController extends Controller
{
	public function index()
	{
		$menu = 'Poinku';
		return view('pages.admin.poinku.list', compact('menu'));
	}

	protected function store(Request $req)
	{
		$poinku = \DB::table('pointku')
						->insert([
							'id_user' => $req->id_user,
							'id_book' => $req->id_book,
							'id_meringkas' => $req->id_meringkas,
							'pointku' => $req->poinku
						]);
		return redirect('/admin/poinku')->with('success_create','Berhasil menambahkan data!');
	}
}