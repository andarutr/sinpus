<?php

namespace App\Http\Livewire\Admin\Access;

use Livewire\Component;
use Livewire\WithPagination;

class CardLevel extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;
    public $paginate = 5;

    public function changeLevel($id)
    {
        $user = \DB::table('users')
                    ->where('id',$id)
                    ->first();

        if($user->id_role === 2) {            
            $change_level = \DB::table('users')
                                ->where('id',$id)
                                ->update([
                                    'id_role' => 3,
                                    'updated_at' => now()
                                ]);
        }else{
            $change_level = \DB::table('users')
                                ->where('id',$id)
                                ->update([
                                    'id_role' => 2,
                                    'updated_at' => now()
                                ]);
        }

        session()->flash('success_update', 'Berhasil memperbarui data!');

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

        return view('livewire.admin.access.card-level', [
            'users' => $this->search === null ? $users : $search]);
    }
}
