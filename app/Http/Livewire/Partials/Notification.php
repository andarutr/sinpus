<?php

namespace App\Http\Livewire\Partials;

use Auth;
use Livewire\Component;

class Notification extends Component
{
    public function render()
    {
        $notifications = \DB::table('notifications')
                                ->orderByDesc('id_notif')
                                ->where('id_user',Auth::user()->id)
                                ->join('users','notifications.id_user','=','users.id')
                                ->join('books','notifications.id_book','=','books.id_book')
                                ->select('notifications.*','users.name','books.nm_book')
                                ->limit(5)
                                ->get();

        return view('livewire.partials.notification', compact('notifications'));
    }
}
