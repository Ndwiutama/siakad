<?php
namespace App\Http\Controllers\Praja;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;

class ProfileController extends Controller
{
    public function resetPassword(Request $request)
    {
        // Validasi input
        $request->validate([
            'new_password' => 'required|string|min:8',
        ]);

        // Ambil user yang sedang login
        $user = User::find(Auth::id());

        // Jika user tidak ditemukan, tambahkan pesan error
        if (!$user) {
            return redirect()->route('praja.profile')->with('error', 'Gagal mereset password.');
        }

        // Ambil password baru dari request
        $newPassword = $request->new_password;
        
        // Update password user
        $user->forceFill([
            'password' => Hash::make($newPassword),
            'remember_token' => Str::random(60),
        ])->save();

        // Trigger event password reset
        event(new PasswordReset($user));

        // Redirect langsung ke halaman profil dengan pesan sukses
        return redirect()->route('praja.profile')->with('success', 'Password berhasil direset.');
    }

    public function showResetPasswordForm()
    {
        return view('praja.reset-password');
    }
    
    // Menampilkan form untuk mengubah password
    public function showChangePasswordForm()
    {
        return view('praja.change-password');
    }
    
    // Memproses perubahan password
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);
        
        $user = Auth::user();
        
        // Cek password lama
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Password saat ini tidak cocok']);
        }
        
        // Update password
        $user->forceFill([
            'password' => Hash::make($request->password),
            'remember_token' => Str::random(60),
        ])->save();
        
        // Trigger event password reset
        event(new PasswordReset($user));
        
        return redirect()->route('praja.profile')->with('success', 'Password berhasil diubah');
    }
}







