<?php

namespace App\Http\Livewire\Admin\Poinku;

use Livewire\Component;
use Livewire\WithPagination;

class CardPoinku extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
    public $search;
    public $paginate = 5;
    
    public function render()
    {
        $poinku = \DB::table('pointku')
                        ->orderByDesc('id_pointku')
                        ->join('users','pointku.id_user','=','users.id')
                        ->join('books','pointku.id_book','=','books.id_book')
                        ->join('meringkas','pointku.id_meringkas','=','meringkas.id_meringkas')
                        ->select('users.name','books.picture_book','books.nm_book','pointku.*')
                        ->paginate($this->paginate);

        $search = \DB::table('pointku')
                        ->join('users','pointku.id_user','=','users.id')
                        ->join('books','pointku.id_book','=','books.id_book')
                        ->join('meringkas','pointku.id_meringkas','=','meringkas.id_meringkas')
                        ->where('name','like','%'.$this->search.'%')
                        ->orwhere('nm_book','like','%'.$this->search.'%')
                        ->select('users.name','books.picture_book','books.nm_book','pointku.*')
                        ->paginate($this->paginate);

        return view('livewire.admin.poinku.card-poinku', [
            'poinku' => $this->search === null ? $poinku : $search]);
    }

    public function destroy($id)
    {
        \DB::table('pointku')->where('id_pointku',$id)->delete();
        session()->flash('success_delete','Berhasil menghapus data!');
    }
}
