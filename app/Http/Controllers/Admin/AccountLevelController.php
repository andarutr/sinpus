<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountLevelController extends Controller
{
    public function index()
    {
        $menu = 'Account Level';
        return view('pages.admin.account.level', compact('menu'));
    }

}