<?php
namespace App\Http\Controllers\Praja;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function resetPassword(Request $request)
    {
        // Ambil user yang sedang login
        $user = User::find(Auth::id());

        // Jika user tidak ditemukan, tambahkan pesan error
        if (!$user) {
            return redirect()->back()->with('error', 'Gagal mereset password.');
        }

        // Reset password ke default (misalnya: 'password123')
        $user->password = Hash::make('password123');
        $user->save();

        // Kirim respons sukses
        return redirect()->back()->with('success', 'Password berhasil direset ke default.');
    }
}