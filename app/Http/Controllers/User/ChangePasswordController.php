<?php

namespace App\Http\Controllers\User;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChangePasswordController extends Controller
{
    public function index()
    {
        return view('pages.sinpus.user.change-password');
    }

    protected function update(Request $req)
    {
        $this->validate($req, [
            'old_password' => 'required|min:8',
            'new_password' => 'required|min:8|same:password_confirmation',
            'password_confirmation' => 'required',
        ]);

        if(Auth::attempt(['email' => Auth::user()->email, 'password' => $req->old_password]))
        {
            $update = \DB::table('users')
                            ->where('email',Auth::user()->email)
                            ->update([
                                'password' => \Hash::make($req->new_password)
                            ]);
            return redirect()->back()->with('success_change_password','Berhasil ganti Password!');
        }else{
            return redirect()->back()->with('failed_change_password','Password anda salah!');
        }
    }

}