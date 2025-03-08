<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        //praktikum week-3
        // $data = [
        //     'username' => 'customer-1',
        //     'nama' => 'Pelanggan',
        //     'password' => Hash::make('12345'), 
        //     'level_id' => 4
        // ];
        // UserModel::insert($data);

        // Tambah Data user dengan Eloquent Model
        // week-4 prak 1
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     // 'nama' => 'Pelanggan Pertama', // week 3
        //     'password' => Hash::make('12345'),
        // ];
        // UserModel::create($data);

        // UserModel::where('username', 'customer-1')->update($data); //update data user (week 3)
        // akses model UserModel
        // $user = UserModel::all();
        // return view('user', ['data' => $user]);
        
        // week-4 prak 2.1
        // $user = UserModel::find(1);
        // $user = UserModel::where('level_id', 1)->first();
        // $user = UserModel::firstWhere('level_id', 1);
        // $user = UserModel::findOr(20,['username','nama'], function(){
        //     abort(404);
        // });
        // return view('user', ['data' => $user]);

        // week-4 prak 2.2
        // $user = UserModel::findOrFail(1);
        $user = UserModel::where('username', 'manager9')->firstOrFail();
        return view('user', ['data' => $user]);
    }
}
