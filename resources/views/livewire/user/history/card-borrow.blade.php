<div class="hk-pg-header pt-7 pb-4">
    <h1 class="pg-title">History Peminjaman Buku</h1>
</div>
<div class="hk-pg-body">
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
        <div class="col-6 col-lg-3 col-sm-6">
            <input type="text" class="form-control" placeholder="Cari Data..." wire:model="search">
        </div>
    </div>
    <div class="row">
      <div class="col-lg-11 col-sm-9 col-12">
            <table class="table table-striped table-responsive">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Buku</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($histories_pinjam as $history)
                    <tr>
                        <td>
                            <img src="/sinpus/assets/images/book/{{ $history->picture_book }}" class="img-fluid" width="80">
                        </td>
                        <td>{{ $history->nm_book }}</td>
                        <td>{{ $history->nm_statusbuku }}</td>
                        <td>
                            @if($history->id_statusbuku == 3)
                            <a href="/user/pengembalian-buku/{{ $history->url_book }}" onclick="return confirm('Yakin ingin mengembalikan buku?')">kembalikan</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
            </table>
            {{ $histories_pinjam->links() }}
      </div>
    </div>
</div>