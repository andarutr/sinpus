<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Spatie\Image\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AProfileController extends Controller
{
    public function edit()
    {
        $menu = 'Edit Profile';
        
        return view('pages.admin.edit-profile', compact('menu'));
    }
}
