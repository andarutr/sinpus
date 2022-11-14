<?php

namespace App\Http\Livewire\Admin\Book;

use Livewire\Component;

class CardBook extends Component
{
    public function createData()
    {
        return redirect()->to('/admin/book/create');
    }
    
    public function render()
    {
        return view('livewire.admin.book.card-book');
    }
}
