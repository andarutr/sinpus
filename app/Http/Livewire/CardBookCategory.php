<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CardBookCategory extends Component
{
    public function render()
    {
        $category = \DB::table('category')
                        ->where('url_category', $url)
                        ->first();
        $books = \DB::table('books')
                    ->join('category', 'books.id_category', '=', 'category.id_category')
                    ->get();

        return view('livewire.card-book-category', compact('category','books'));
    }
}
