<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AChangePasswordController extends Controller
{
    public function index()
    {
        $menu = 'Change Password';
        return view('pages.admin.change-password', compact('menu'));
    }

}