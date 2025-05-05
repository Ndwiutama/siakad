<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        $loginField = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        
        $credentials = [
            $loginField => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();
            switch ($user->role) {
                case 'admin':
                    return redirect()->route('admin.dashboard');
                case 'dosen':
                    return redirect()->route('dosen.dashboard');
                case 'praja':
                    return redirect()->route('praja.dashboard');
                default:
                    return redirect('/');
            }
        }

        return back()->withErrors([
            'email' => 'NPP/Email atau password salah.',
        ])->withInput($request->only('email'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
