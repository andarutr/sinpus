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
		$peringkas = \DB::table('meringkas')
							->orderByDesc('id_meringkas')
							->join('users','meringkas.id_user','=','users.id')
							->join('books','meringkas.id_book','=','books.id_book')
							->join('status_buku','books.id_statusbuku','=','status_buku.id_statusbuku')
							->select('meringkas.*','users.name','users.picture','books.nm_book')
							->get();

		return view('pages.admin.ringkasan.list', compact('menu','peringkas'));
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

	protected function destroy($id)
	{
		$delete = \DB::table('meringkas')->where('id_meringkas',$id)->delete();
		return redirect('/admin/ringkasan')->with('success_ringkasan_delete','Berhasil menghapus ringkasan!');
	}
}