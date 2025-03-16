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

        // // modifikasi perubahan dari js 4-first dan juga find or fail
        // $user = UserModel::where('username','manager9')->firstOrFail();
        // return view('user', ['data' => $user]);

        // // modifikasi perubahan dari js 4  retrieving agregate
        // $user = UserModel::where('level_id', 2)->count();
        // // dd($user);
        // return view('user', ['data' => $user]);

        // // modifikasi perubahan dari js 4-retrieving agregate
        // $user = UserModel::firstOrNew([
        //     'username' => 'manager',
        //     'nama' => 'Manager',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2
        // ]);
        // $user->save();

        // return view('user', ['data' => $user]);


        // // modifikasi perubahan dari js 4-attribute changes
        // $user = UserModel::create([
        //     'username' => 'manager55',
        //     'nama' => 'Manager55',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2
        // ]);
        // $user->username = 'manager56';

        // // Mengecek perubahan pada model
        // $user->isDirty(); // true
        // $user->isDirty('username'); // true
        // $user->isDirty('nama'); // false
        // $user->isDirty(['nama', 'username']); // true

        // // Mengecek apakah model dalam keadaan bersih
        // $user->isClean(); // false
        // $user->isClean('username'); // false
        // $user->isClean('nama'); // true
        // $user->isClean(['nama', 'username']); // false

        // // Menyimpan perubahan ke database
        // $user->save();

        // // Setelah disimpan, isDirty akan menjadi false
        // $user->isDirty(); // false

        // $user->isClean(); // true

        // // Debugging untuk melihat hasil
        // dd($user->isDirty());


        // // Membuat user baru dengan Eloquent
        // $user = UserModel::create([
        //     'username' => 'manager11',
        //     'nama' => 'Manager11',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2,
        // ]);

        // // Mengubah username
        // $user->username = 'manager12';

        // // Menyimpan perubahan ke database
        // $user->save();

        // // Mengecek perubahan setelah penyimpanan
        // $user->wasChanged(); // true
        // $user->wasChanged('username'); // true
        // $user->wasChanged(['username', 'level_id']); // true
        // $user->wasChanged('nama'); // false

        // // Debugging untuk melihat hasil perubahan
        // dd($user->wasChanged(['nama', 'username'])); // true

        // modifikasi perubahan dari js 4-CRUD
        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }

    public function tambah()
    {
        return view('user_tambah');
    }

    public function tambah_Simpan(Request $request)
    {
        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id,
        ]);
        return redirect('/user');
    }

    public function ubah($id)
    {
        $user = UserModel::find($id);
        return view('user_ubah', ['data' => $user]);
    }

    public function ubah_simpan($id, Request $request)
    {

        $user = UserModel::find($id);

        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->password = Hash::make('$request->password');
        $user->level_id = $request->level_id;

        $user->save();

        return redirect('/user');
    }

    public function hapus($id) {
        $user = UserModel::find($id);
        $user->delete();
        
        return redirect('/user');
    }
}
