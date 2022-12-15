<?php

namespace App\Http\Livewire\User\Notification;

use Auth;
use Livewire\Component;
use Livewire\WithPagination;

class CardNotification extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $paginate = 5;

    public function render()
    {
        $notifications = \DB::table('notifications')
                                ->orderByDesc('id_notif')
                                ->where('id_user', Auth::user()->id)
                                ->join('books','notifications.id_book','=','books.id_book')
                                ->select('books.nm_book','notifications.*')
                                ->paginate($this->paginate);

        return view('livewire.user.notification.card-notification', compact('notifications'));
    }
}
