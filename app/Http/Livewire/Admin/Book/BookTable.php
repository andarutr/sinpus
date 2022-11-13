<?php

namespace App\Http\Livewire\Admin\Book;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\File; 

class BookTable extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;
    public $paginate = 5;
    
    public function destroy($id)
    {
        $book = \DB::table('books')->where('id_book',$id)->first();
        $delete = \DB::table('books')->where('id_book',$id)->delete();
        $delete_file = File::delete('sinpus/assets/images/book/'.$book->picture_book);
        session()->flash('success_delete','Berhasil hapus data!');
    }

    public function render()
    {
        $books = \DB::table('books')
                    ->orderByDesc('id_book')
                    ->paginate($this->paginate);
        $search = \DB::table('books')
                    ->where('nm_book','like','%'.$this->search.'%')
                    ->paginate($this->paginate);
        return view('livewire.admin.book.book-table', [
            'books' => $this->search === null ? $books : $search
        ]);
    }
}
