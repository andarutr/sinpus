<?php

namespace App\Http\Livewire\User\History;

use Auth;
use Livewire\Component;
use Livewire\WithPagination;

class CardBorrow extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
    public $search;
    public $paginate = 5;
    
    public function render()
    {
        $histories_pinjam = \DB::table('pinjam')
                                ->where('id_user', Auth::user()->id)
                                ->orderByDesc('id_pinjam')
                                ->join('books','books.id_book','=','pinjam.id_book')
                                ->join('status_buku', 'books.id_statusbuku', '=', 'status_buku.id_statusbuku')
                                ->paginate($this->paginate);

        return view('livewire.user.history.card-borrow', compact('histories_pinjam'));
    }
}
