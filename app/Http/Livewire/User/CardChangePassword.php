<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class CardChangePassword extends Component
{
    protected $listeners = [
        'success_change_password' => 'successHandlers',
        'failed_change_password' => 'failedHandlers'
    ];

    public function render()
    {
        return view('livewire.user.card-change-password');
    }

    public function successHandlers()
    {
        session()->flash('success_change_password','Berhasil memperbarui password!');
    }

    public function failedHandlers()
    {
        session()->flash('failed_change_password','Gagal memperbarui password!');
    }
}
