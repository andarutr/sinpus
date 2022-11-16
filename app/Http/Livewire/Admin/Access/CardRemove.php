<?php

namespace App\Http\Livewire\Admin\Access;

use Livewire\Component;
use Livewire\WithPagination;

class CardRemove extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;
    public $paginate = 5;

    public function accountRemove($id)
    {
        $remove = \DB::table('users')
                        ->where('id',$id)
                        ->delete();

        session()->flash('success_delete', 'Berhasil menghapus data!');
    }

    public function render()
    {
        $users = \DB::table('users')
                        ->orderByDesc('id')
                        ->join('roles','users.id_role','=','roles.id_role')
                        ->paginate($this->paginate);

        $search = \DB::table('users')
                        ->join('roles','users.id_role','=','roles.id_role')
                        ->where('name','like','%'.$this->search.'%')
                        ->orwhere('email','like','%'.$this->search.'%')
                        ->orwhere('nm_role','like','%'.$this->search.'%')
                        ->paginate($this->paginate);

        return view('livewire.admin.access.card-remove', [
            'users' => $this->search === null ? $users : $search]);
    }
}
