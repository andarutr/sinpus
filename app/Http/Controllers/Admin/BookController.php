<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Carbon\Carbon;
use Spatie\Image\Image;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 
use App\Http\Controllers\Controller;

class BookController extends Controller
{
	public function index()
	{
		$menu = 'Book';
		return view('pages.admin.book.list', compact('menu'));
	}

	public function create()
	{
		$menu = 'Book';
		$category = \DB::table('category')->get();
		return view('pages.admin.book.create', compact('menu','category'));
	}

	public function store(Request $req)
	{
		$this->validate($req, [
			'nm_book' => 'required|min:10',
			'picture_book' => 'required',
			'category' => 'required',
			'author_book' => 'required',
			'description' => 'required',
		]);

		$picture = $req->file('picture_book');
		$image_manipulation = Image::load($picture)
	                            ->width(558)
	                            ->height(558)
	                            ->save('sinpus/assets/images/book/'.$picture->getClientOriginalName());
        $create = \DB::table('books')
		                ->insert([
		                    'nm_book' => $req->nm_book,
		                    'picture_book' => $picture->getClientOriginalName(),
		                    'id_category' => $req->category,
		                    'author_book' => $req->author_book,
		                    'description' => $req->description,
		                    'publish_from' => Auth::user()->name,
		                    'id_statusbuku' => 1,
		                    'url_book' => \Str::slug($req->nm_book),
		                    'created_at' => now(),
		                    'updated_at' => now()
		                ]);

        session()->flash('success_create','Berhasil menambahkan data!');
        return redirect()->to('/admin/book');
	}

	public function edit(Request $req, $id)
	{
		$menu = 'Book';
		$category = \DB::table('category')->get();
		$book = \DB::table('books')->where('id_book',$id)
					->join('category','books.id_category','=','category.id_category')
					->first();
		return view('pages.admin.book.edit', compact('menu','book','category'));
	}

	public function update(Request $req, $id)
	{
		$this->validate($req, [
			'nm_book' => 'required|min:10',
			'category' => 'required',
			'author_book' => 'required',
			'description' => 'required',
		]);

		if($req->hasFile('picture_book'))
		{
			$pict = $req->file('picture_book');
	        $img_fit = Image::load($pict)
	                            ->width(558)
	                            ->height(558)
	                            ->save('sinpus/assets/images/book/'.$pict->getClientOriginalName());

			$update = \DB::table('books')
							->where('id_book',$id)
							->update([
								'nm_book' => $req->nm_book,
								'picture_book' => $pict->getClientOriginalName(),
								'id_category' => $req->category,
								'author_book' => $req->author_book,
								'description' => $req->description,
								'publish_from' => Auth::user()->name,
								'url_book' => Str::slug($req->nm_book),
								'updated_at' => now()
							]);
		}else {
			$update = \DB::table('books')
							->where('id_book',$id)
							->update([
								'nm_book' => $req->nm_book,
								'id_category' => $req->category,
								'author_book' => $req->author_book,
								'description' => $req->description,
								'publish_from' => Auth::user()->name,
								'url_book' => Str::slug($req->nm_book),
								'updated_at' => now()
							]);
		}

		session()->flash('success_update','Berhasil memperbarui data!');
		return redirect()->to('/admin/book');
	}
}