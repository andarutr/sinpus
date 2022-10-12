<?php

namespace App\Http\Controllers\User;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

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

    public function edit()
    {
        $user = \DB::table('users')
                    ->join('kelas', 'users.id_kelas', '=', 'kelas.id_kelas')
                    ->where('name', Auth::user()->name)
                    ->select('users.*', 'kelas.*')
                    ->first();
        $kelas = \DB::table('kelas')->get();
        return view('pages.sinpus.user.edit-profile', compact('user','kelas'));
    }

    public function update(Request $req)
    {
        $this->validate($req, [
            'name' => 'required',
            'kelas' => 'required',
            'phone_number' => 'required',
        ]);

        if($req->hasFile('picture')) {
            $pict = $req->file('picture');
            $pict->move('sinpus/assets/images/profile', $pict->getClientOriginalName());
            $update = \DB::table('users')
                        ->where('email', Auth::user()->email)
                        ->update([
                            'name' => $req->name,
                            'picture' => $pict->getClientOriginalName(),
                            'id_kelas' => $req->kelas,
                            'phone_number' => $req->phone_number,
                        ]);    
        }else{
            $update = \DB::table('users')
                        ->where('email', Auth::user()->email)
                        ->update([
                            'name' => $req->name,
                            'id_kelas' => $req->kelas,
                            'phone_number' => $req->phone_number,
                        ]);
        }
        

        return redirect()->back()->with('success_edit_profile', 'Berhasil edit profil!');

    }
}
