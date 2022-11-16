<?php

namespace App\Http\Livewire\User\Summary;

use Auth;
use Livewire\Component;
use Livewire\WithPagination;

class CardSummary extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
    public $paginate = 5;

    public function render()
    {
        $pinjam_buku = \DB::table('pinjam')
                            ->where('id_user',Auth::user()->id)
                            ->join('books','books.id_book','=','pinjam.id_book')
                            ->join('status_buku', 'books.id_statusbuku', '=', 'status_buku.id_statusbuku')
                            ->paginate($this->paginate);

        return view('livewire.user.summary.card-summary', compact('pinjam_buku'));
    }
}
