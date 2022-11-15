<?php

namespace App\Http\Livewire\User;

use Auth;
use Livewire\Component;

class ChangePassword extends Component
{
    public $old_password, $new_password, $password_confirmation;

    public function changePassword()
    {
        $this->validate([
            'old_password' => 'required|min:8',
            'new_password' => 'required|min:8|same:password_confirmation',
            'password_confirmation' => 'required'
        ]);

        if(Auth::attempt(['email' => Auth::user()->email, 'password' => $this->old_password]))
        {
            $update_data = \DB::table('users')
                            ->where('email',Auth::user()->email)
                            ->update([
                                'password' => \Hash::make($this->new_password)
                            ]);
            $this->emit('success_change_password', $update_data);
            $this->reset();
        }else{
            $this->emit('failed_change_password');
            $this->reset();
        }
    }

    public function render()
    {
        return view('livewire.user.change-password-form');
    }
}
