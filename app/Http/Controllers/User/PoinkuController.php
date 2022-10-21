<?php

namespace App\Http\Controllers\User;

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
						->where('pointku.id_user', \Auth::user()->id)
						->get();
		$total_point = \DB::table('pointku')
							->where('id_user', \Auth::user()->id)
							->sum('pointku.pointku');						

		return view('pages.sinpus.user.poinku.list', compact('menu','poinku','total_point'));
	}
}