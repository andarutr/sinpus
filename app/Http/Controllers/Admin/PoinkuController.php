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
		$poinku = \DB::table('pointku')
						->orderByDesc('id_pointku')
						->join('users','pointku.id_user','=','users.id')
						->join('books','pointku.id_book','=','books.id_book')
						->join('meringkas','pointku.id_meringkas','=','meringkas.id_meringkas')
						->select('users.name','books.picture_book','books.nm_book','pointku.*')
						->get();

		return view('pages.admin.poinku.list', compact('menu','poinku'));
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
		return redirect('/admin/poinku')->with('success_poinku_create','Berhasil memberikan poin ringkasan!');
	}

	protected function destroy($id)
	{
		$delete = \DB::table('pointku')->where('id_pointku',$id)->delete();
		return redirect('/admin/poinku')->with('success_poinku_delete','Berhasil menghapus point!');
	}
}