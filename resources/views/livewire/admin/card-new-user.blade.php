<div>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="tab_block_1">
            <div class="row">
                <div class="col-md-12 mb-md-4 mb-3">
                    <div class="card card-border mb-0 h-100">
                        <div class="card-header card-header-action">
                            <h6>Siswa Terdaftar
                                <span class="badge badge-sm badge-light ms-1">{{ $user_count-1 }}</span>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="contact-list-view">
                                <table class="table nowrap w-100 mb-5">
                                    <thead>
                                        <tr>
                                            <th>Foto</th>
                                            <th>Nama Lengkap</th>
                                            <th>Email</th>
                                            <th>Tgl Daftar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        @if($user->id_role === 2)
                                        <tr>
                                            <td>
                                                <img src="/sinpus/assets/images/profile/{{ $user->picture }}" class="img-fluid rounded" width="80" height="80">
                                            </td>
                                            <td>
                                                <p>{{ $user->name }}</p>
                                            </td>
                                            <td>
                                                <p>{{ $user->email }}</p>
                                            </td>
                                            <td>
                                                <p>{{ $user->created_at }}</p>
                                            </td>
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>
