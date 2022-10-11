<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $menu = 'Dashboard';
        $user_count = \DB::table('users')->count();
        $users = \DB::table('users')
                    ->orderByDesc('id')
                    ->paginate(10);
        return view('pages.admin.dashboard', compact('menu','users','user_count'));
    }
}
