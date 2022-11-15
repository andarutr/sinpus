<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $menu = 'Notification';
        return view('pages.admin.notification.list', compact('menu'));
    }
}
