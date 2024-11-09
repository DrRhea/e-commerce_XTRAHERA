<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages/auth/login');
    }

    public function register()
    {
        return view('pages/auth/register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'required|string|unique:users',
            'address' => 'nullable|string|max:255',
            'subscription_status' => 'boolean',
        ], [
            'name.required' => 'Nama harus diisi.',
            'name.string' => 'Nama harus berupa teks.',
            'name.max' => 'Nama tidak boleh lebih dari :max karakter.',
            'email.required' => 'Email harus diisi.',
            'email.string' => 'Email harus berupa teks.',
            'email.email' => 'Email harus dalam format yang benar.',
            'email.max' => 'Email tidak boleh lebih dari :max karakter.',
            'email.unique' => 'Email sudah digunakan.',
            'password.required' => 'Password harus diisi.',
            'password.string' => 'Password harus berupa teks.',
            'password.min' => 'Password harus minimal :min karakter.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
            'phone.required' => 'Nomor telepon harus diisi.',
            'phone.string' => 'Nomor telepon harus berupa teks.',
            'phone.unique' => 'Nomor telepon sudah digunakan.',
            'address.string' => 'Alamat harus berupa teks.',
            'address.max' => 'Alamat tidak boleh lebih dari :max karakter.',
            'subscription_status.boolean' => 'Status berlangganan harus dalam format boolean.',
        ]);

        // Mengambil data yang dapat diisi dari permintaan
        $data = $request->only($this->fillable);
        // Mengenkripsi password sebelum menyimpannya
        $data['password'] = Hash::make($request->password);

        // Membuat user baru
        $user = User::create($data);

        // Login user setelah berhasil registrasi
        Auth::login($user);

        // Menambahkan pesan sukses ke session
        $request->session()->flash('success', 'Anda telah berhasil mendaftar.');

        // Redirect ke halaman home setelah registrasi berhasil
        return redirect()->route('home.index');
    }


    public function logout()
    {

    }
}
