<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\DB;

class SessionController extends Controller
{
    public function loginreg()
    {
        return view('loginreg');
    }

    public function postlogin(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt($validatedData)) {
            $request->session()->regenerate();
            $user = Auth()->user();
            if ($user->role == 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role == 'user') {
                return redirect()->route('main');
            }
            return redirect('/');
        } else {
            return view('gagalLogin'); // UNTUK LOGIN GAGAL
            // return redirect('loginreg')->withErrors('Username dan/atau password yang dimasukkan tidak valid');
        }
    }

    public function register()
    {
        return view('loginreg');
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ], [
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Tolong masukkan email yang valid',
            'email.unique' => 'Email sudah pernah digunakan, silakan gunakan email yang lain',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minimum password yang diizinkan adalah 6 karakter',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->role = 'user';
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->email_verification_hash = sha1($user->email); // Set email_verification_hash
        $user->save();

        // Kirim email verifikasi ke alamat email pengguna
        $hash = sha1($user->email); // Menghitung hash verifikasi
        $verificationUrl = route('verify', ['userId' => $user->id, 'hash' => $hash]);
        Mail::send('verifikasi.getVerifikasi', ['verificationUrl' => $verificationUrl, 'userId' => $user->id, 'hash' => $hash], function ($message) use ($user) {
        $message->to($user->email);
        $message->subject('Verifikasi Akun');
        });

        return view('verifikasi.verifikasi');
    }

   


    public function verify($userId, $hash)
    {
        $user = DB::table('users')->where('id', $userId)->first();

        if ($user && hash_equals($hash, sha1($user->email))) {
            DB::table('users')->where('id', $userId)->update(['email_verified_at' => now()]);

            event(new Verified($user));

            return view('verifikasi.doneVerifikasi');
        }

        return redirect('/loginreg')->with('error', 'Verifikasi gagal. Silahkan coba lagi atau hubungi dukungan kami.');
    }


    public function resend(Request $request){
        $request->user()->sendEmailVerificationNotification();
        return view('verifikasi.verifikasi');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

    public function deleteAccount(Request $request)
    {
        $user = Auth::user();

        // Hapus akun dari database
        $userId = $user->id;
        User::destroy($userId);

        // Logout pengguna
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

    
}
