<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;

class CreateCategoryForm extends Component
{
    public $nm_category, $url_category;

    public function goToMain()
    {
        $this->emit('goToMain');
    }

    public function store()
    {
        $this->validate([
            'nm_category' => 'required|unique:category',
            'url_category' => 'required|unique:category',
        ]);

        $create = \DB::table('category')
                        ->insert([
                            'nm_category' => $this->nm_category,
                            'url_category' => \Str::slug($this->url_category),
                        ]);

        $this->reset();
        
        session()->flash('success_create','Berhasil tambah data!');
    }

    public function render()
    {
        return view('livewire.admin.category.create-category-form');
    }
}
