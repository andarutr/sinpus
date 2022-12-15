<div class="hk-pg-body">
    <button wire:click="goToMain" class="btn btn-sm btn-success mb-4">Kembali</button>
    @if(session()->has('success_update'))
    <livewire:notifications.success-update />
    @endif
    <div class="row edit-profile-wrap">
      <div class="col-lg-10 col-sm-9 col-10">
        <div class="tab-content">
          <div class="tab-pane fade show active" id="tab_block_1">
            <form wire:submit.prevent="update">
              <div class="row gx-3">
                <!-- If Sessions -->
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="form-label">Kategori</label>
                    <input class="form-control" type="text" wire:model="nm_category">
                    @error('nm_category')<p class="text-danger">{{ $message }}</p>@enderror
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="form-label">URL</label>
                    <input class="form-control" type="text" wire:model="url_category">
                    @error('url_category')<p class="text-danger">{{ $message }}</p>@enderror
                  </div>
                </div>
              </div>
              <button class="btn btn-success mt-5">Edit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>