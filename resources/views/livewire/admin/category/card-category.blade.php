<div class="container-xxl">
  <!-- Page Header -->
  <div class="hk-pg-header pt-7 pb-4">
    <h1 class="pg-title">Kategori</h1>
  </div>
  <!-- /Page Header -->
  @if($statusPage === 'createData')
  <livewire:admin.category.create-category-form />
  @endif

  @if($statusPage === 'updateData')
  <livewire:admin.category.update-category-form />
  @endif

  @if($statusPage === 'main')
  <div class="hk-pg-body">
    <button wire:click="createData" class="btn btn-outline-primary mb-4">Tambah Data</button>
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
    @if(session()->has('success_delete'))
    <livewire:notifications.success-delete />
    @endif
    <div class="row">
      <div class="col-lg-11 col-sm-9 col-12">
        <table id="example" class="table table-striped table-responsive">
            <thead>
                <tr>
                    <th>Kategori</th>
                    <th>URL</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $category->nm_category }}</td>
                    <td>{{ asset('kategori/'.$category->url_category) }}</td>
                    <td>
                        <a href="/kategori/{{ $category->url_category }}" class="btn btn-sm btn-primary" target="_blank"><i class="material-icons">visibility</i></a>
                        <button wire:click="getCategory({{ $category->id_category }})" class="btn btn-sm btn-success"><i class="material-icons">edit</i></button>
                        <button wire:click="destroy({{ $category->id_category }})" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data?') || event.stopImmediatePropagation()"><i class="material-icons">delete</i></button>
                    </td>
                </tr>
                @endforeach
        </table>
        {{ $categories->links() }}
      </div>
    </div>
  </div>
  @endif   
</div>