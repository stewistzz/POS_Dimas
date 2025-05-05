<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\UserModel; // pastikan model User diimpor
use App\Models\LevelModel; // pastikan model User diimpor

class AuthController extends Controller
{
    public function login()
    {
        // Jika sudah login, maka redirect ke halaman home
        if (Auth::check()) {
            return redirect('/');
        }

        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        if ($request->ajax() || $request->wantsJson()) {
            $credentials = $request->only('username', 'password');

            if (Auth::attempt($credentials)) {
                return response()->json([
                    'status' => true,
                    'message' => 'Login Berhasil',
                    'redirect' => url('/')
                ]);
            }

            return response()->json([
                'status' => false,
                'message' => 'Login Gagal'
            ]);
        }

        return redirect('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
    }

    // tugas membuat register
    public function register()
    {
        return view('auth.register');
    }

    // post register mengarahkan kedalam proses register
    public function postRegister(Request $request)
    {
        if ($request->ajax() || $request->wantsJson()) {

            $request->validate([
                'nama'     => 'required|string|max:255',
                'username' => 'required|string|max:255|unique:m_user,username',
                'password' => 'required|string|min:6',
            ]);
    
            // Cari ID level dengan kode 'STF'
            $stfLevel = LevelModel::where('level_kode', 'STF')->first();
    
            if (!$stfLevel) {
                return response()->json([
                    'status'  => false,
                    'message' => 'Role STF tidak ditemukan.',
                ]);
            }
    
            // Buat user baru
            $user = UserModel::create([
                'level_id' => $stfLevel->level_id,
                'username' => $request->username,
                'nama'     => $request->nama,
                'password' => $request->password,
            ]);
    
            if ($user) {
                return response()->json([
                    'status'   => true,
                    'message'  => 'Registrasi Berhasil',
                    'redirect' => url('login'),
                ]);
            } else {
                return response()->json([
                    'status'  => false,
                    'message' => 'Registrasi Gagal',
                ]);
            }
        }
    
        return redirect('register');
    }
}
