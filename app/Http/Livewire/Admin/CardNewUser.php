<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class CardNewUser extends Component
{
    public function render()
    {
        $user_count = \DB::table('users')->count();
        $users = \DB::table('users')
                    ->orderByDesc('id')
                    ->paginate(10);
        return view('livewire.admin.card-new-user', compact('user_count','users'));
    }
}
