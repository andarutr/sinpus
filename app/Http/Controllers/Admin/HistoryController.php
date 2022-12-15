<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HistoryController extends Controller
{
	public function index()
	{
		$menu = 'History';
		return view('pages.admin.history.list', compact('menu'));
	}
}