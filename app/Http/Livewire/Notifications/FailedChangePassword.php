<?php

namespace App\Http\Livewire\Notifications;

use Livewire\Component;

class FailedChangePassword extends Component
{
    public function render()
    {
        return view('livewire.notifications.failed-change-password');
    }
}
