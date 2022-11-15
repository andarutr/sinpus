<div>
    <div class="row edit-profile-wrap">
      <div class="col-lg-12 col-sm-9 col-12">
        <div class="tab-content">
          <div class="tab-pane fade show active" id="tab_block_1">
          @if(session()->has('success_change_password'))
            <livewire:notifications.success-change-password />
          @elseif(session()->has('failed_change_password'))
            <livewire:notifications.failed-change-password />
          @endif
            <livewire:user.change-password-form />
          </div>
        </div>
      </div>
    </div>
</div>
