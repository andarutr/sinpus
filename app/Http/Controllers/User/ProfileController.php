<?php

namespace App\Http\Controllers\User;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function show()
    {
        $user = \DB::table('users')
                    ->join('kelas', 'users.id_kelas', '=', 'kelas.id_kelas')
                    ->where('name', Auth::user()->name)
                    ->select('users.*', 'kelas.*')
                    ->first();
        return view('pages.sinpus.user.profile', compact('user'));
    }
}
