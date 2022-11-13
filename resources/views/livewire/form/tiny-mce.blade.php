<div>
    <div class="col-sm-12">
      <div class="form-group">
        <label class="form-label">Deskripsi</label>
        <textarea id="classic" wire:model="parent.description"></textarea>
        @error('description')<p class="text-danger">{{ $message }}</p>@enderror
      </div>
    </div>
</div>
