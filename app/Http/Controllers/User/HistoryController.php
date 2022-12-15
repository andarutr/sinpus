<?php

namespace App\Http\Controllers\User;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HistoryController extends Controller
{
	public function index()
	{
		return view('pages.sinpus.user.history.list');
	}
}