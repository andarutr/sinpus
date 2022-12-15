<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountRemoveController extends Controller
{
    public function index()
    {
        $menu = 'Account Remove';
        return view('pages.admin.account.remove', compact('menu'));
    }

}