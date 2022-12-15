<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InventoryController extends Controller
{
	public function index()
	{
		$menu = 'Inventory';

		return view('pages.admin.inventory.list', compact('menu'));
	}
}