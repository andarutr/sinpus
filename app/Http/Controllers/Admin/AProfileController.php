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
        $user = \DB::table('users')
                    ->join('kelas', 'users.id_kelas', '=', 'kelas.id_kelas')
                    ->where('name', Auth::user()->name)
                    ->select('users.*', 'kelas.*')
                    ->first();
        $kelas = \DB::table('kelas')->get();

        return view('pages.admin.edit-profile', compact('menu','user','kelas'));
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
            $img_fit = Image::load($pict)
                            ->width(250)
                            ->height(250)
                            ->save('sinpus/assets/images/profile/'.$pict->getClientOriginalName());
            // $pict->move('sinpus/assets/images/profile', $pict->getClientOriginalName());
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
        

        return redirect()->back()->with('success_update', 'Berhasil memperbarui data!');
    }
}
