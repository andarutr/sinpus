<div>
    @foreach($notifications as $notif)
    <a href="#" class="dropdown-item">
        <div class="media">
            <div class="media-head">
                @if($notif->do_notif === 'meminjam')
                <div class="avatar avatar-icon avatar-sm avatar-primary avatar-rounded">
                @elseif($notif->do_notif === 'meringkas')
                <div class="avatar avatar-icon avatar-sm avatar-info avatar-rounded">
                @elseif($notif->do_notif === 'memperbarui ringkasan')
                <div class="avatar avatar-icon avatar-sm avatar-success avatar-rounded">
                @else
                <div class="avatar avatar-icon avatar-sm avatar-secondary avatar-rounded">
                @endif
                    <span class="initial-wrap">
                        <span class="feather-icon"><i data-feather="book-open"></i></span>
                    </span>
                </div>
            </div>
            <div class="media-body">
                <div>
                    <div class="notifications-text">{{ $notif->name }} {{ $notif->do_notif }} Buku {{ $notif->nm_book }}</div>
                    <div class="notifications-primary">
                        <div class="notifications-time">{{ $notif->created_at }}</div>
                    </div>
                </div>
            </div>
        </div>
    </a>
    @endforeach
</div>
