<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Login',
            
        ];
        return view('auth.index', $data);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if (auth()->user()->is_active) {
                return redirect()->route('apps.dashboard')->with('success', 'Anda Berhasil Login');
            } else {
                Auth::logout();
                return redirect()->route('auth')->with('error', 'Akun Anda belum diaktivasi');
            }
        } else {
            return redirect()->route('auth')->with('error', 'Login Gagal. Periksa kembali email dan password Anda.');
        }
    }

    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect()->route('auth')->with('success', 'Anda telah berhasil keluar.');
    }
}
