<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use Livewire\WithPagination;

class CardCategory extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;
    public $paginate = 5;

    public $statusPage = 'main';

    public $listeners = [
        'goToMain' => 'goToMainHandlers'
    ];

    public function createData()
    {
        $this->statusPage = 'createData';
    }
    
    public function getCategory($id)
    {
        $category = \DB::table('category')->where('id_category',$id)->first();

        $this->statusPage = 'updateData';
        $this->emit('getCategory', $category);
        // $this->emit('showCategory', $category);
    }

    public function render()
    {
        $categories = \DB::table('category')
                            ->orderByDesc('id_category')
                            ->paginate($this->paginate);

        $search = \DB::table('category')
                    ->where('nm_category','like','%'.$this->search.'%')
                    ->paginate($this->paginate);

        return view('livewire.admin.category.card-category', [
            'categories' => $this->search === null ? $categories : $search]);
    }

    public function destroy($id)
    {
        if($id)
        {
            \DB::table('category')->where('id_category',$id)->delete();
            session()->flash('success_delete', 'Berhasil menghapus data!');
        }
    }

    public function goToMainHandlers()
    {
        $this->statusPage = 'main';
    } 
}
