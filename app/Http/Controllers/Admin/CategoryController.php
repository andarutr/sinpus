<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
	public function index()
	{
		$menu = 'Category';
		$categories = \DB::table('category')
							->orderByDesc('id_category')
							->get();

		return view('pages.admin.category.list', compact('menu','categories'));
	}

	public function create()
	{
		$menu = 'Category';
		return view('pages.admin.category.create', compact('menu'));
	}

	protected function store(Request $req)
	{
		$this->validate($req, [
			'nm_category' => 'required|unique:category',
			'url_category' => 'required|unique:category',
		]);

		$create = \DB::table('category')
						->insert([
							'nm_category' => $req->nm_category,
							'url_category' => Str::slug($req->url_category),
						]);

		return redirect('/admin/category')->with('success_category_create','Berhasil membuat kategori!');

	}

	public function edit($id)
	{
		$menu = 'Category';
		$category = \DB::table('category')
						->where('id_category',$id)
						->first();

		return view('pages.admin.category.edit', compact('category','menu'));
	}

	protected function update(Request $req, $id)
	{
		$this->validate($req, [
			'nm_category' => 'required',
			'url_category' => 'required',
		]);

		$update = \DB::table('category')
						->where('id_category', $id)
						->update([
							'nm_category' => $req->nm_category,
							'url_category' => Str::slug($req->url_category),
						]);

		return redirect('/admin/category')->with('success_category_edit','Berhasil memperbarui kategori!');

	}

	protected function destroy($id)
	{
		$delete = \DB::table('category')
						->where('id_category',$id)
						->delete();

		return redirect('/admin/category')->with('success_category_delete','Berhasil hapus kategori!');
	}
}