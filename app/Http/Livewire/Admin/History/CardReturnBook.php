<?php

namespace App\Http\Livewire\Admin\History;

use Livewire\Component;
use Livewire\WithPagination;

class CardReturnBook extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
    public $search;
    public $paginate = 5;

    public function render()
    {
        $histories_pengembalian = \DB::table('kembalikan')
                                    ->orderByDesc('id_kembalikan')
                                    ->join('books','kembalikan.id_book','=','books.id_book')
                                    ->join('users','kembalikan.id_user','=','users.id')
                                    ->paginate($this->paginate);

        $search = \DB::table('kembalikan')
                        ->orderByDesc('id_kembalikan')
                        ->join('books','kembalikan.id_book','=','books.id_book')
                        ->join('users','kembalikan.id_user','=','users.id')
                        ->where('name','like','%'.$this->search.'%')
                        ->orwhere('nm_book','like','%'.$this->search.'%')
                        ->paginate($this->paginate);

        return view('livewire.admin.history.card-return-book', ['histories_pengembalian' => $this->search === null ? $histories_pengembalian : $search]);
    }
}
