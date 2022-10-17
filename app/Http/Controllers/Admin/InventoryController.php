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
					->get();

		return view('pages.admin.inventory.list', compact('menu','books'));
	}

	protected function update($id)
	{
		$book = \DB::table('books')
							->where('id_book',$id)
							->first();

		if($book->status == 'Tersedia') {
			$update = \DB::table('books')
						->where('id_book',$id)
						->update([
							'status' => 'Terpinjam',
							'updated_at' => Carbon::now()->toDateTimeString()
						]);
		}else{
			$update = \DB::table('books')
						->where('id_book',$id)
						->update([
							'status' => 'Tersedia',
							'updated_at' => Carbon::now()->toDateTimeString()
						]);
		}

		return redirect()->back()->with('success_inventory_edit','Berhasil memperbarui status buku!');
	}
}