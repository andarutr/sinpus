<?php

namespace App\Http\Livewire\Admin\Summary;

use Livewire\Component;
use Livewire\WithPagination;

class CardSummary extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
    public $search;
    public $paginate = 5;

    public function render()
    {
        $peringkas = \DB::table('meringkas')
                            ->orderByDesc('id_meringkas')
                            ->join('users','meringkas.id_user','=','users.id')
                            ->join('books','meringkas.id_book','=','books.id_book')
                            ->join('status_buku','books.id_statusbuku','=','status_buku.id_statusbuku')
                            ->select('meringkas.*','users.name','users.picture','books.nm_book')
                            ->paginate($this->paginate);
        $search = \DB::table('meringkas')
                            ->join('users','meringkas.id_user','=','users.id')
                            ->join('books','meringkas.id_book','=','books.id_book')
                            ->join('status_buku','books.id_statusbuku','=','status_buku.id_statusbuku')
                            ->where('name','like','%'.$this->search.'%')
                            ->select('meringkas.*','users.name','users.picture','books.nm_book')
                            ->paginate($this->paginate);

        return view('livewire.admin.summary.card-summary', [
            'peringkas' => $this->search === null ? $peringkas : $search]);
    }

    public function destroy($id)
    {
        \DB::table('meringkas')->where('id_meringkas',$id)->delete();
        session()->flash('success_delete','Berhasil menghapus data!');
    }
}
