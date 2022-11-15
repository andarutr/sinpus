<?php

namespace App\Http\Livewire\User\Summary;

use Auth;
use Livewire\Component;
use Livewire\WithPagination;

class CardSummaryEdit extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
    public $paginate = 5;

    public function render()
    {
        $edit_ringkasan = \DB::table('meringkas')
                            ->where(['id_user' => Auth::user()->id])
                            ->join('books','meringkas.id_book','=','books.id_book')
                            ->join('status_buku', 'books.id_statusbuku', '=', 'status_buku.id_statusbuku')
                            ->paginate($this->paginate);

        return view('livewire.user.summary.card-summary-edit', compact('edit_ringkasan'));
    }
}
