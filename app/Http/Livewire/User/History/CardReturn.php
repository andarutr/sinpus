<?php

namespace App\Http\Livewire\User\History;

use Auth;
use Livewire\Component;
use Livewire\WithPagination;

class CardReturn extends Component
{
    use WithPagination;
    
    protected $paginationTheme = 'bootstrap';
    
    public $search;
    public $paginate = 5;

    public function render()
    {
        $histories_pengembalian = \DB::table('kembalikan')
                                        ->orderByDesc('id_kembalikan')
                                        ->where('id_user', Auth::user()->id)
                                        ->join('books','kembalikan.id_book','=','books.id_book')
                                        ->paginate($this->paginate);

        return view('livewire.user.history.card-return', compact('histories_pengembalian'));
    }
}
