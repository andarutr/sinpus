<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
	public function index()
	{
		$menu = 'Category';
		return view('pages.admin.category.list', compact('menu'));
	}
}