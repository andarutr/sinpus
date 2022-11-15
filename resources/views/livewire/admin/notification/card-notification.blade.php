<div class="hk-pg-header pt-7 pb-4">
    <h1 class="pg-title">Notification</h1>
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
        <div class="col-lg-4">
            <input type="text" class="form-control" placeholder="Cari Data..." wire:model="search">
        </div>
    </div>
    <div class="row">
      <div class="col-lg-11 col-sm-9 col-12">
            <table class="table table-striped table-responsive">
                <thead>
                    <tr>
                        <th>Kegiatan</th>
                        <th>Updated At</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($notifications as $notif)
                    <tr>
                        <td>{{ $notif->name }} {{ $notif->do_notif }} Buku {{ $notif->nm_book }}</td>
                        <td>{{ $notif->updated_at }}</td>
                        <td>{{ $notif->created_at }}</td>
                    </tr>
                    @endforeach
            </table>
            {{ $notifications->links() }}
      </div>
    </div>
</div>