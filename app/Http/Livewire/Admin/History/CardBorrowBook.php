<?php

namespace App\Http\Livewire\Admin\History;

use Livewire\Component;
use Livewire\WithPagination;

class CardBorrowBook extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
    public $search;
    public $paginate = 5;

    public function render()
    {
        $histories_pinjam = \DB::table('pinjam')
                                ->join('books','pinjam.id_book','=','books.id_book')
                                ->join('status_buku', 'books.id_statusbuku', '=', 'status_buku.id_statusbuku')
                                ->join('users','pinjam.id_user','=','users.id')
                                ->paginate($this->paginate);

        $search = \DB::table('pinjam')
                        ->join('books','pinjam.id_book','=','books.id_book')
                        ->join('status_buku', 'books.id_statusbuku', '=', 'status_buku.id_statusbuku')
                        ->join('users','pinjam.id_user','=','users.id')
                        ->where('name','like','%'.$this->search.'%')
                        ->orwhere('nm_book','like','%'.$this->search.'%')
                        ->paginate($this->paginate);

        return view('livewire.admin.history.card-borrow-book', [
            'histories_pinjam' => $this->search === null ? $histories_pinjam : $search]);
    }
}
