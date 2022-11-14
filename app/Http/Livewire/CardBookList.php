<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CardBookList extends Component
{
    public function render()
    {
        $books = \DB::table('books')
                        ->orderByDesc('id_book')
                        ->limit(4)
                        ->get();
        return view('livewire.card-book-list', compact('books'));
    }
}
