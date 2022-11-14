<div class="container-xxl">
  <!-- Page Header -->
  <div class="hk-pg-header pt-7 pb-4">
    <h1 class="pg-title">Ringkasan</h1>
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
        @if(session()->has('success_delete'))
          <livewire:notifications.success-delete />
          @endif
        <table id="example" class="table table-striped table-responsive">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Buku</th>
                    <th>Deskripsi</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($peringkas as $pks)
                <tr>
                    <td>
                        <a href="/sinpus/assets/images/profile/{{ $pks->picture }}" data-fancybox>
                            <img src="/sinpus/assets/images/profile/{{ $pks->picture }}" class="img-fluid" width="80">
                        </a>
                    </td>
                    <td>{{ $pks->name }}</td>
                    <td>{{ $pks->nm_book }}</td>
                    <td><?= Str::limit($pks->ringkasan,100); ?></td>
                    <td>{{ $pks->updated_at }}</td>
                    <td>
                        <a href="/admin/ringkasan/view/{{ $pks->id_meringkas }}" class="btn btn-primary btn-animated"><i data-feather="eye"></i></a>
                        <button wire:click="destroy({{ $pks->id_meringkas }})" class="btn btn-danger btn-animated" onclick="return confirm('Yakin ingin menghapus data?') || event.stopImmediatePropagation()"><i class="material-icons">delete</i></button>
                    </td>
                </tr>
                @endforeach
        </table>
        {{ $peringkas->links() }}
      </div>
    </div>
  </div>
  <!-- /Page Body -->   
</div>