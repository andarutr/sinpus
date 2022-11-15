<?php

namespace App\Http\Livewire\Partials;

use Auth;
use Livewire\Component;

class NotificationAdmin extends Component
{
    public function render()
    {
        $notifications = \DB::table('notifications')
                                ->orderByDesc('id_notif')
                                ->join('users','notifications.id_user','=','users.id')
                                ->join('books','notifications.id_book','=','books.id_book')
                                ->select('notifications.*','users.name','books.nm_book')
                                ->limit(5)
                                ->get();

        return view('livewire.partials.notification-admin', compact('notifications'));
    }
}
