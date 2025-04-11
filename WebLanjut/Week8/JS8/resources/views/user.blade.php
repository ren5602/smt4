<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data User</title>
</head>

<body>
    <h1>Data User</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        {{-- week3 --}}
        {{-- <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Nama</th>
            <th>ID Level Pengguna</th>
        </tr>
        @foreach ($data as $d)
        <tr>
            <td>{{ $d->user_id }}</td>
            <td>{{ $d->username }}</td>
            <td>{{ $d->nama }}</td>
            <td>{{ $d->level_id }}</td>
        </tr>
        @endforeach --}}

        {{-- week 4 prak 1-2.2 --}}
        {{-- <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Nama</th>
            <th>ID Level Pengguna</th>
        </tr>
        <tr>
            <td>{{ $data->user_id }}</td>
            <td>{{ $data->username }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->level_id }}</td>
        </tr> --}}

        {{-- week 4 prak 2.3 --}}
        {{-- <tr>
            <th>jumlah pengguna</th>
        </tr>
        <tr>
            <td>{{ $data }}</td>
        </tr> --}}

        {{-- week 4 prak 2.4 --}}
        {{-- <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Nama</th>
            <th>ID Level Pengguna</th>
        </tr>
        <tr>
            <td>{{ $data->user_id }}</td>
            <td>{{ $data->username }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->level_id }}</td>
        </tr> --}}

        {{-- week 4 prak 2.6 --}}
        <a href="/user/tambah">+ Tambah User</a>
        <tr>
            <td>ID</td>
            <td>Username</td>
            <td>Nama</td>

            {{-- week 4 prak 2.7 --}}
            <td>Kode Level</td>
            <td>Nama Level</td>
            
            {{-- week 4 prak 2.6 --}}
            <td>ID Level Pengguna</td>
            <td>Aksi</td>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->user_id }}</td>
                <td>{{ $d->username }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->level_id }}</td>

                {{-- week 4 prak 2.7 --}}
                <td>{{ $d->level->level_kode }}</td>
                <td>{{ $d->level->level_nama }}</td>

                {{-- week 4 prak 2.6 --}}
                <td><a href="/user/ubah/{{ $d->user_id }}">Ubah</a> |
                    <a href="/user/hapus/{{ $d->user_id }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
