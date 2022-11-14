<?php

namespace App\Http\Livewire\Admin\Inventory;

use Livewire\Component;
use Livewire\WithPagination;

class CardInventory extends Component
{
    use WithPagination;
    
    protected $paginationTheme = 'bootstrap';

    public $search;
    public $paginate = 5;

    public function update($id)
    {
        $book = \DB::table('books')
                            ->where('id_book',$id)
                            ->first();

        if($book->id_statusbuku === 2) {
            $update = \DB::table('books')
                        ->where('id_book',$id)
                        ->update([
                            'id_statusbuku' => 3,
                            'updated_at' => now()
                        ]);
        }elseif($book->id_statusbuku === 3){
            $update = \DB::table('books')
                        ->where('id_book',$id)
                        ->update([
                            'id_statusbuku' => 4,
                            'updated_at' => now()
                        ]);
        }else{
            $update = \DB::table('books')
                        ->where('id_book',$id)
                        ->update([
                            'id_statusbuku' => 1,
                            'updated_at' => now()
                        ]);
        }

        session()->flash('success_update','Berhasil memperbarui data!');
    }

    public function render()
    {
        $books = \DB::table('books')
                    ->orderByDesc('id_book')
                    ->join('status_buku','books.id_statusbuku','=','status_buku.id_statusbuku')
                    ->paginate($this->paginate);

        $search = \DB::table('books')
                    ->join('status_buku','books.id_statusbuku','=','status_buku.id_statusbuku')
                    ->where('nm_book','like','%'.$this->search.'%')
                    ->paginate($this->paginate);

        return view('livewire.admin.inventory.card-inventory', [
            'books' => $this->search === null ? $books : $search]);
    }
}
