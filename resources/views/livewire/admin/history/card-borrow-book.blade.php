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
        <table class="table table-striped table-responsive">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Buku</th>
                    <th>Status</th>
                    <th>Dipinjam Oleh</th>
                    <th>Dipinjam Pada</th>
                </tr>
            </thead>
            <tbody>
                @foreach($histories_pinjam as $history)
                <tr>
                    <td>
                        <a href="/sinpus/assets/images/book/{{ $history->picture_book }}" data-fancybox>
                            <img src="/sinpus/assets/images/book/{{ $history->picture_book }}" class="img-fluid rounded" width="80">
                        </a>
                    </td>
                    <td>{{ $history->nm_book }}</td>
                    <td>{{ $history->nm_statusbuku }}</td>
                    <td>{{ $history->name }}</td>
                    <td>{{ $history->created_at }}</td>
                </tr>
                @endforeach
        </table>
        {{ $histories_pinjam->links() }}
      </div>
    </div>
</div>