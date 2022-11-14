<div>
    <div class="row mb-4">
        <div class="col-lg-2">
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
    @if(session()->has('success_create'))
    <livewire:notifications.success-create />
    @elseif(session()->has('success_update'))
    <livewire:notifications.success-update />
    @elseif(session()->has('success_delete'))
    <livewire:notifications.success-delete />
    @endif
    <table class="table table-striped table-responsive">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Buku</th>
                <th>Author</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>
                    <a href="/sinpus/assets/images/book/{{ $book->picture_book }}" data-fancybox>
                        <img src="/sinpus/assets/images/book/{{ $book->picture_book }}" class="img-fluid" width="80">
                    </a>
                </td>
                <td>{{ $book->nm_book }}</td>
                <td>{{ $book->author_book }}</td>
                <td>{{ $book->created_at }}</td>
                <td>{{ $book->updated_at }}</td>
                <td>
                    <a href="/admin/book/edit/{{ $book->id_book }}" class="btn btn-sm btn-success"><i class="material-icons">edit</i></a>
                    <button class="btn btn-sm btn-danger"><i class="material-icons" wire:click="destroy({{ $book->id_book }})" onclick="return confirm('Yakin ingin menghapus data?') || event.stopImmediatePropagation()">delete</i></button>
                </td>
            </tr>
            @endforeach
    </table>

    {{ $books->links() }}
</div>
