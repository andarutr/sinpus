<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Profile
    public function profile()
    {
        return view('pages.sinpus.user.profile');
    }

    // Edit Profile
    public function edit_profile()
    {
        return view('pages.sinpus.user.edit-profile');
    }

    // Change Password
    public function change_password()
    {
        return view('pages.sinpus.user.change-password');
    }
}
