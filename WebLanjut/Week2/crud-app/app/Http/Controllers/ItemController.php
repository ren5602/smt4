<?php
//mendeklarasikan App\Http\Controllers untuk bisa digunakan di yang lain
namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        /**
         * note: fungsi index digunakan untuk menampilkan index dari folder items
         * dan menampilkan semua data yang terdapat pada table items
         **/
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    public function create()
    {
        //note: fungsi create untuk membuat item baru berdasarkan nama file create.blade.php
        return view('items.create');
    }

    public function store(Request $request)
    {
        /**
         * note: Fungsi ini digunakan untuk menambahkan item baru ke dalam database
         **/
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        // Hanya masukkan atribut yang diizinkan
        Item::create($request->only(['name', 'description']));
        return redirect()->route('items.index')->with('success', 'Item added successfully.');
    }
    public function show(Item $item)
    {
        /**
         * note: Fungsi ini digunakan untuk menampilkan detail item yang dipilih
         **/
        return view('items.show', compact('item'));
    }


    public function edit(Item $item)
    {
        /**
         * note: Fungsi ini digunakan untuk menampilkan halaman edit item
         * dan mengirimkan data item yang dipilih ke view edit
         */
        return view('items.edit', compact('item'));
    }

    public function update(Request $request, string $id, Item $item)
    {
        /**
         * note: Fungsi ini digunakan untuk mengupdate item yang dipilih
         * lalu mengirimkan pesan sukses jika berhasil
         **/
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        // Hanya masukkan atribut yang diizinkan
        $item->update($request->only(['name', 'description']));
        return redirect()->route('items.index')->with('success', 'Item updated successfully.');
    }


    public function destroy(Item $item)
    {
        /**
         * note: Fungsi ini digunakan untuk menghapus item yang dipilih
         * lalu mengirimkan pesan sukses jika berhasil
         **/
        $item->delete();
        return redirect()->route('items.index')->with('success', 'Item deleted successfully.');
    }
}
