<?php

namespace App\Http\Livewire\Admin\Notification;

use Auth;
use Livewire\Component;
use Livewire\WithPagination;

class CardNotification extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;
    public $paginate = 5;

    public function render()
    {
        $notifications = \DB::table('notifications')
                                ->join('users','notifications.id_user','=','users.id')
                                ->join('books','notifications.id_book','=','books.id_book')
                                ->orderByDesc('id_notif')
                                ->select('users.name','books.nm_book','notifications.*')
                                ->paginate($this->paginate);

        $search = \DB::table('notifications')
                        ->where('do_notif','like','%'.$this->search.'%')
                        ->join('users','notifications.id_user','=','users.id')
                        ->join('books','notifications.id_book','=','books.id_book')
                        ->select('users.name','books.nm_book','notifications.*')
                        ->paginate($this->paginate);

        return view('livewire.admin.notification.card-notification', [
            'notifications' => $this->search === null ? $notifications : $search]);
    }
}
