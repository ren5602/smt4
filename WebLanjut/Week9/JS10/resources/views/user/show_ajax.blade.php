<div id="modal-master" class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header bg-dark text-white">
            <h5 class="modal-title w-100 text-center" id="exampleModalLabel">Profile Data User</h5>
            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">
            <div class="row align-items-center">
                <!-- Kolom foto profil -->
                <div class="col-md-4 text-center mb-3">
                    <strong class="d-block mb-2">Foto Profil</strong>
                    <label for="profile_picture" class="position-relative d-inline-block">
                        <div class="rounded-circle overflow-hidden shadow-sm" style="width: 150px; height: 150px;">
                            <img id="preview-image" src="{{ $user->picture_path ?? asset('default-profile.jpg') }}"
                                alt="Foto Profil"
                                class="img-fluid h-100 w-100"
                                style="object-fit: cover; object-position: center;">
                        </div>
                    </label>
                </div>

                <!-- Kolom data user -->
                <div class="col-md-8">
                    <table class="table table-bordered table-sm mb-0">
                        <tbody>
                            <tr>
                                <th scope="row" style="width: 30%;">ID</th>
                                <td>{{ $user->user_id }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Level</th>
                                <td>{{ $user->level->level_nama }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Username</th>
                                <td>{{ $user->username }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Nama</th>
                                <td>{{ $user->nama }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Password</th>
                                <td>********</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
