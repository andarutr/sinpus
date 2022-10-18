<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InventoryController extends Controller
{
	public function index()
	{
		$menu = 'Inventory';
		$books = \DB::table('books')
					->orderByDesc('id_book')
					->join('status_buku','books.id_statusbuku','=','status_buku.id_statusbuku')
					->get();

		return view('pages.admin.inventory.list', compact('menu','books'));
	}

	protected function update($id)
	{
		$book = \DB::table('books')
							->where('id_book',$id)
							->first();

		if($book->id_statusbuku === 2) {
			$update = \DB::table('books')
						->where('id_book',$id)
						->update([
							'id_statusbuku' => 3,
							'updated_at' => Carbon::now()->toDateTimeString()
						]);
		}elseif($book->id_statusbuku === 3){
			$update = \DB::table('books')
						->where('id_book',$id)
						->update([
							'id_statusbuku' => 4,
							'updated_at' => Carbon::now()->toDateTimeString()
						]);
		}else{
			$update = \DB::table('books')
						->where('id_book',$id)
						->update([
							'id_statusbuku' => 1,
							'updated_at' => Carbon::now()->toDateTimeString()
						]);
			// Pengembalian Buku
		}

		return redirect()->back()->with('success_inventory_edit','Berhasil memperbarui status buku!');
	}
}