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
                    @foreach($edit_ringkasan as $ringkasan)
                    @if($ringkasan->id_statusbuku === 3)
                    <tr>
                        <td>
                            <img src="/sinpus/assets/images/book/{{ $ringkasan->picture_book }}" class="img-fluid" width="80">
                        </td>
                        <td>{{ $ringkasan->nm_book }}</td>
                        <td>{{ $ringkasan->nm_statusbuku }}</td>
                        <td>
                            @if($ringkasan->id_statusbuku == 3)
                                <a href="/user/meringkas-buku/edit/{{ $ringkasan->url_book }}">Edit!</a>
                            @endif
                        </td>
                    </tr>
                    @endif
                    @endforeach
            </table>
            {{ $edit_ringkasan->links() }}
      </div>
    </div>
</div>