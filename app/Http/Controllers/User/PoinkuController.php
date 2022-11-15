<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PoinkuController extends Controller
{
	public function index()
	{
		$menu = 'Poinku';					
		return view('pages.sinpus.user.poinku.list', compact('menu'));
	}
}