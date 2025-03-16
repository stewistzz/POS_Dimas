<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModel;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // public function user($id, $name) {
    //     return view('user', [
    //         'id' => $id,
    //         'name' => $name  
    //     ]);
    // }

    public function index()
    {
        // bagian 2
        // tambah data user dengan Eloquent Model
        // $data = [
        //     'username' => 'customer-1',
        //     'nama' => 'Pelanggan',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 4
        // ];
        // UserModel::insert($data); // tambahkan data ke tabel m_user

        // // bagian 3
        // $data = [
        //     'nama' => 'Pelanggan Pertama',
        // ];
        // UserModel::where('username', 'customer-1')->update($data);

        // // eloquent ORM
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345')
        // ];
        // UserModel::create($data);

        // bagian 1
        // coba akses model UserModel
        // $user = UserModel::all(); // ambil semua data dari tabel m_user

        // // modifikasi perubahan dari js 4
        // $user = UserModel::findOr(20, ['username','nama'], function() {
        //     abort(404);
        // }) ;
        // return view('user', ['data' => $user]);

        // // modifikasi perubahan dari js 4  first dan juga find or fail
        // $user = UserModel::where('username','manager9')->firstOrFail();
        // return view('user', ['data' => $user]);

        // // modifikasi perubahan dari js 4  retrieving agregate
        // $user = UserModel::where('level_id', 2)->count();
        // // dd($user);
        // return view('user', ['data' => $user]);

        // modifikasi perubahan dari js 4  retrieving agregate
        $user = UserModel::firstOrNew([
            'username' => 'manager',
            'nama' => 'Manager',
            'password' => Hash::make('12345'),
            'level_id' => 2
        ]);
        $user->save();
        
        return view('user', ['data' => $user]);
    }
}
