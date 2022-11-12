<div>
    <form wire:submit.prevent="update">
        <div class="col-sm-12">
          <div class="form-group">
            <div class="media align-items-center">
              <div class="media-head me-5">
                <div class="avatar avatar-rounded avatar-xxl">
                  <img src="/sinpus/assets/images/profile/{{ $user->picture }}" alt="user" class="avatar-img">
                </div>
              </div>
              <div class="media-body">
                <div class="btn btn-soft-primary btn-file mb-1">
                  Upload Photo
                  <input type="file" class="upload" wire:model="picture">
                </div>
                <div class="form-text text-muted">
                  For better preview recommended size is 450px x 450px. Max size 5mb.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="title title-xs title-wth-divider text-primary text-uppercase my-4"><span>Personal Info</span></div>
      <div class="row gx-3">
        <div class="col-sm-6">
          <div class="form-group">
            <label class="form-label">Nama Lengkap</label>
            <input class="form-control" type="text" wire:model="name" value="{{ Auth::user()->name }}">
            @error('name')<p class="text-danger">{{ $message }}</p>@enderror
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label class="form-label">Email</label>
            <input class="form-control" type="text" value="{{ $user->email }}" readonly/>
          </div>
        </div>
      </div>
      <div class="row gx-3">
        <div class="col-sm-12">
          <label class="form-label">Kelas</label>
          <select class="form-select" wire:model="kelas">
            <option value="{{ $user->id_kelas }}">{{ $user->nomor_kelas }} {{ $user->prodi_kelas }}</option>
            @foreach($kelas as $kls)
            <option value="{{ $kls->id_kelas }}">{{ $kls->nomor_kelas }} {{ $kls->prodi_kelas }}</option>
            @endforeach
          </select>
          @error('kelas')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
      </div>
      <div class="title title-xs title-wth-divider text-primary text-uppercase my-4"><span>Additional Info</span></div>
      <div class="row gx-3">
        <div class="col-sm-12">
          <div class="form-group">
            <label class="form-label">Phone</label>
            <input class="form-control" type="text" wire:model="phone_number" value="{{ $user->phone_number }}">
            @error('phone_number')<p class="text-danger">{{ $message }}</p>@enderror
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary mt-5">Save Changes</button>
    </form>
</div>
