<div class="hk-pg-body">
    @if(session()->has('success_delete'))
    <livewire:notifications.success-delete />
    @endif
    <div class="row mb-4">
        <div class="col-3 col-lg-1 col-sm-3">
            <select class="form-select" wire:model="paginate">
                <option>Filter</option>
                <option value="5">5</option>
                <option value="8">8</option>
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
            </select>
        </div>
        <div class="col-lg-4">
            <input type="text" class="form-control" placeholder="Cari Data..." wire:model="search">
        </div>
    </div>
    <div class="row">
      <div class="col-lg-10 col-sm-9 col-12">
            <table class="table table-striped table-responsive">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Bergabung</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    @if($user->id_role === 2 || $user->id_role === 3)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->nm_role }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>
                            <button class="btn btn-danger" wire:click="accountRemove({{ $user->id }})" onclick="return confirm('Yakin ingin menghapus data?') || event.stopImmediatePropagation()">Remove</button>
                        </td>
                    </tr>
                    @endif
                    @endforeach
            </table>
            {{ $users->links() }}
      </div>
    </div>
</div>