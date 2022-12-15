<div>
  <div class="row">
    <div class="col-lg-10">
      <form wire:submit.prevent="changePassword">
        <div class="row gx-3">
          <div class="col-sm-12">
            <div class="form-group">
              <div class="input-group password-check">
                <span class="input-affix-wrapper affix-wth-text">
                  <input class="form-control" type="password" wire:model="old_password" placeholder="Password Lama">
                  <a href="#" class="input-suffix text-primary text-uppercase fs-8 fw-medium">
                    <span>Show</span>
                    <span class="d-none">Hide</span>
                  </a>
                  @error('old_password')<p class="text-danger">{{ $message }}</p>@enderror
                </span>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <div class="input-group password-check">
                <span class="input-affix-wrapper affix-wth-text">
                  <input class="form-control" type="password" wire:model="new_password" placeholder="Password Baru">
                  <a href="#" class="input-suffix text-primary text-uppercase fs-8 fw-medium">
                    <span>Show</span>
                    <span class="d-none">Hide</span>
                  </a>
                  @error('new_password')<p class="text-danger">{{ $message }}</p>@enderror
                </span>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <div class="input-group password-check">
                <span class="input-affix-wrapper affix-wth-text">
                  <input class="form-control" type="password" wire:model="password_confirmation" placeholder="Konfirmasi Password Baru">
                  <a href="#" class="input-suffix text-primary text-uppercase fs-8 fw-medium">
                    <span>Show</span>
                    <span class="d-none">Hide</span>
                  </a>
                  @error('password_confirmation')<p class="text-danger">{{ $message }}</p>@enderror
                </span>
              </div>
            </div>
          </div>
        </div>
        <button class="btn btn-primary mt-5">Save Changes</button>
      </form>
    </div>
  </div>
</div>
