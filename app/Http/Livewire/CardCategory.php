<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CardCategory extends Component
{
    public function render()
    {
        $category = \DB::table('category')->get();
        return view('livewire.card-category', compact('category'));
    }
}
