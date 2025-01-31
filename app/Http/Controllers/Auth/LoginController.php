<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function username()
    {
        return 'username';
    }

    protected function authenticated(Request $request, $user)
    {
        // Periksa status aktif akun.
        if (!auth()->check() || !auth()->user()->is_active || auth()->user()->is_active != 1) {
            auth()->logout();

            return redirect('/login')->withErrors(['is_active' => 'Akun Belum Aktif']); // Atau tampilkan view dengan pesan error
            // return back()->withErrors(['is_active' => 'Akun Belum Aktif']); // Mengembalikan ke halaman sebelumnya dengan pesan error
        }
        return redirect('/')->with('success', 'Anda Berhasil Login!');
        // return back()->with(['success' => 'Anda Berhasil Login']); // Mengembalikan ke halaman sebelumnya dengan pesan success
    }
}
