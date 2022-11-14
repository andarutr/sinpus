<div class="container-xxl">
  <!-- Page Header -->
  <div class="hk-pg-header pt-7 pb-4">
    <h1 class="pg-title">List Poinku</h1>
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
        @if(session()->has('success_create'))
        <livewire:notifications.success-create />
        @elseif(session()->has('success_delete'))
        <livewire:notifications.success-delete />
        @endif
        <table class="table table-striped table-responsive">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Buku</th>
                    <th>Peringkas</th>
                    <th>Point</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($poinku as $pku)
                <tr>
                    <td>
                        <a href="/sinpus/assets/images/book/{{ $pku->picture_book }}" data-fancybox>
                            <img src="/sinpus/assets/images/book/{{ $pku->picture_book }}" class="img-fluid" width="80">
                        </a>
                    </td>
                    <td>{{ $pku->nm_book }}</td>
                    <td>{{ $pku->name }}</td>
                    <td>{{ $pku->pointku }}</td>
                    <td>{{ $pku->updated_at }}</td>
                    <td>
                        <a href="/admin/ringkasan/view/{{ $pku->id_meringkas}}" class="btn btn-sm btn-primary">
                            <i data-feather="eye"></i>
                        </a>
                        <button wire:click="destroy({{ $pku->id_pointku }})" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data?') || event.stopImmediatePropagation()">
                            <i class="material-icons">delete</i>
                        </button>
                    </td>
                </tr>
                @endforeach
        </table>
        {{ $poinku->links() }}
      </div>
    </div>
  </div>
  <!-- /Page Body -->   
</div>