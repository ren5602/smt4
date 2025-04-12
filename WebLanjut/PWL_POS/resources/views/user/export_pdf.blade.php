<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    @include('layouts.dompdf-style')
</head>

<body>
    <table class="border-bottom-header">
        <tr>
            {{-- <td width="15%" class="text-center"><img src="{{ asset('polinema-bw.png') }}"></td> --}}
            <td width="85%">
                <span class="text-center d-block font-11 font-bold mb-1">KEMENTERIAN
                    PENDIDIKAN, KEBUDAYAAN, RISET, DAN TEKNOLOGI</span>
                <span class="text-center d-block font-13 font-bold mb-1">POLITEKNIK NEGERI
                    MALANG</span>
                <span class="text-center d-block font-10">Jl. Soekarno-Hatta No. 9 Malang
                    65141</span>
                <span class="text-center d-block font-10">Telepon (0341) 404424 Pes. 101-
                    105, 0341-404420, Fax. (0341) 404420</span>
                <span class="text-center d-block font-10">Laman: www.polinema.ac.id</span>
            </td>
        </tr>
    </table>
    <h3 class="text-center">LAPORAN DATA USER</h4>
        <table class="border-all">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Level Pengguna</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $u)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $u->username }}</td>
                        <td>{{ $u->nama }}</td>
                        <td>{{ $u->level_id }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</body>

</html>