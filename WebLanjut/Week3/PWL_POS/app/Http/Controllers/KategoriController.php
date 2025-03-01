<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KategoriController extends Controller
{
    public function index()
    {
        // insert data kategori
        // $data = [
        //     'kategori_kode' => 'SNK',
        //     'kategori_nama' => 'Snack/Makanan Ringan',
        //     'created_at' => now()
        // ];
        // DB::table('m_kategori')->insert($data);
        // return 'Insert Data Berhasil';

        // Update Data KAtegori
        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
        // return 'Update Data Berhasil, Jumlah data yang diupdate: ' . $row . ' baris';

        // Hapus Data Kategori
        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
        // return 'Hapus Data Berhasil, Jumlah data yang dihapus: ' . $row . ' baris';

        // Menampilkan Data Kategori
        $data = DB::table('m_kategori')->get();
        return view('kategori', ['data' => $data]);
    }
}
