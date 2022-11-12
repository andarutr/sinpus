<div>
    <form wire:submit.prevent="changePassword">
      <div class="row gx-3">
        <div class="col-sm-12">
          <div class="form-group">
            <label class="form-label">Password Lama</label>
            <input class="form-control" type="password" wire:model="old_password">
            @error('old_password')<p class="text-danger">{{ $message }}</p>@enderror
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label class="form-label">Password Baru</label>
            <input class="form-control" type="password" wire:model="new_password" />
            @error('new_password')<p class="text-danger">{{ $message }}</p>@enderror
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label class="form-label">Konfirmasi Password Baru</label>
            <input class="form-control" type="password" wire:model="password_confirmation" />
            @error('password_confirmation')<p class="text-danger">{{ $message }}</p>@enderror
          </div>
        </div>
      </div>
      
      <button class="btn btn-primary mt-5">Save Changes</button>
    </form>
</div>
