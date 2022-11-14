<div class="container-xxl">
  <!-- Page Header -->
  <div class="hk-pg-header pt-7 pb-4">
    <h1 class="pg-title">Ketersediaan</h1>
  </div>
  <!-- /Page Header -->

  <!-- Page Body -->
  <div class="hk-pg-body">
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
    <div class="row">
      <div class="col-lg-11 col-sm-9 col-12">
        @if(session()->has('success_update'))
          <livewire:notifications.success-update />
          @endif
                <table id="example" class="table table-striped table-responsive">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Buku</th>
                            <th>Author</th>
                            <th>Status</th>
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
                            <td>
                                @if($book->nm_statusbuku == 'Tersedia')
                                    <span class="badge badge-blue badge-pill">{{ $book->nm_statusbuku }}</span>
                                @elseif($book->nm_statusbuku == 'Terpinjam')
                                    <span class="badge badge-green badge-pill">{{ $book->nm_statusbuku }}</span>
                                @else
                                    <span class="badge badge-grey badge-pill">{{ $book->nm_statusbuku }}</span>
                                @endif
                            </td>
                            <td>{{ $book->updated_at }}</td>
                            <td>
                                @if($book->id_statusbuku === 1)
                                -
                                @elseif($book->id_statusbuku === 2)
                                <button wire:click="update({{ $book->id_book }})" class="btn btn-primary btn-animated" onclick="return confirm('Yakin ingin mengubah status buku menjadi tersedia?') || event.stopImmediatePropagation()">approve!</button>
                                @elseif($book->id_statusbuku === 4)
                                <button wire:click="update({{ $book->id_book }})" class="btn btn-primary btn-animated" onclick="return confirm('Yakin ingin mengubah status buku menjadi tersedia?') || event.stopImmediatePropagation()">approve!</button>
                                @else
                                <button wire:click="update({{ $book->id_book }})" class="btn btn-success btn-animated" onclick="return confirm('Yakin ingin mengubah status buku menjadi tersedia?') || event.stopImmediatePropagation()">pengembalian!</button>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                </table>
            {{ $books->links() }}
      </div>
    </div>
  </div>
  <!-- /Page Body -->   
</div>