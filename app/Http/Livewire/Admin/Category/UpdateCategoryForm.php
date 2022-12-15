<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;

class UpdateCategoryForm extends Component
{
    public $nm_category, $url_category, $CategoryId;
    
    protected $listeners = [
        'getCategory' => 'showCategory'
    ];

    public function goToMain()
    {
        $this->emit('goToMain');
    }

    public function update()
    {
        $this->validate([
            'nm_category' => 'required',
            'url_category' => 'required'
        ]);

        if($this->CategoryId)
        {
            $category = \DB::table('category')->where('id_category',$this->CategoryId)->update([
                    'nm_category' => $this->nm_category,
                    'url_category' => $this->url_category
                ]);
        }
        $this->reset();
        session()->flash('success_update','Berhasil memperbarui data!');
    }

    public function render()
    {
        return view('livewire.admin.category.update-category-form');
    }

    public function showCategory($category)
    {
        $this->nm_category = $category['nm_category'];
        $this->url_category = $category['url_category'];
        $this->CategoryId = $category['id_category'];
    }
}
