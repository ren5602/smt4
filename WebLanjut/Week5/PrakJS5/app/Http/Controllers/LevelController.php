<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    public function index()
    {
        // insert data baru
        // DB::insert(
        //     'insert into m_level(level_kode, level_nama, created_at) values (?,?,?)',
        //     ['CUS', 'Pelanggan,', now()]
        // );
        // return 'insert data baru berhasil';

        // update data
        // $row = DB::update(
        //     'update m_level set level_nama = ? where level_kode = ?',
        //     ['Customer', 'CUS']
        // );
        // return 'update data berhasil, Jumlah data yang diupdate: ' . $row . ' baris';

        // hapus data
        // $row = DB::delete(
        //     'delete from m_level where level_kode = ?',
        //     ['CUS']
        // );
        // return 'hapus data berhasil, Jumlah data yang dihapus: ' . $row . ' baris';

        // menampilkan data
        $data = DB::select('select * from m_level');
        return view('level', ['data' => $data]);
    }
}
