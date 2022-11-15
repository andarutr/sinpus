<?php

namespace App\Http\Livewire\User\Poinku;

use Auth;
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
                        ->where('pointku.id_user', Auth::user()->id)
                        ->paginate($this->paginate);

        $search = \DB::table('pointku')
                        ->join('users','pointku.id_user','=','users.id')
                        ->join('books','pointku.id_book','=','books.id_book')
                        ->join('meringkas','pointku.id_meringkas','=','meringkas.id_meringkas')
                        ->select('users.name','books.picture_book','books.nm_book','pointku.*')
                        ->where('nm_book','like','%'.$this->search.'%')
                        ->paginate($this->paginate);

        $total_point = \DB::table('pointku')
                            ->where('id_user', Auth::user()->id)
                            ->sum('pointku.pointku');   

        return view('livewire.user.poinku.card-poinku', [
            'total_point' => $total_point,
            'poinku' => $this->search === null ? $poinku : $search]);
    }
}
