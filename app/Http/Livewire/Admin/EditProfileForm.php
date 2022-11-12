<?php

namespace App\Http\Livewire\Admin;

use Auth;
use Livewire\Component;

class EditProfileForm extends Component
{
    public $name, $email, $phone_number;
    public $kelas = [];
    
    public function update()
    {
        $this->validate([
            'name' => 'required',
            'kelas' => 'required',
            'phone_number' => 'required'
        ]);
    }

    public function render()
    {
        $user = \DB::table('users')
                    ->join('kelas', 'users.id_kelas', '=', 'kelas.id_kelas')
                    ->where('name', Auth::user()->name)
                    ->select('users.*', 'kelas.*')
                    ->first();
        $kelas = \DB::table('kelas')->get();
        return view('livewire.admin.edit-profile-form', compact('user','kelas'));
    }
}
