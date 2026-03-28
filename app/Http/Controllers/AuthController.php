<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function tunjukinFormLogin()
    {
        return view('auth.login');
    }
    public function tunjukinFormRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user'
        ]);

        return redirect('/login');
    }
    // ini di method register kite buat apa ya namanya, user create ini artinya bikin user baru alias register, nah setelah itu djialankan maka di direct ke halaman login

    public function login(Request $request)
    {

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ], true)) {
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect('/admin');
            }
            return redirect('/dashboard');
        }
        return back()->withErrors([
            'email' => 'Email atau password salah'
        ]);
    }
    // di method ini artinya kalau kita login, maka ini bakal ngerequest dulu ke database tentang kecocokan email sama passwordnya kalau cocok maka dia bakal ngecek lagi role nya apa, kalau role nya admin maka bakal diarahkan ke dashboard admin, kalau bukan admin maka diarahkan ke dashboard biasa, kalau email sama passwordnya gak cocok maka bakal balik lagi ke halaman login

    public function dashboard()
    {
        return view('dashboard');
    }

    public function admin()
    {
        return view('admin.dashboard');
    }

    public function submitJob()
    {
        return view('submitjob');
    }

    public function jobs()
    {
        return view('jobs');
    }

    public function jobsDetail()
    {
        return view('jobsdetail');
    }

    public function approval()
    {
        return view('admin.inboxapproval.index');
    }

    public function manageuser()
    {
        return view('admin.users.index');
    }

    public function managejob()
    {
        return view('admin.jobs.index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
