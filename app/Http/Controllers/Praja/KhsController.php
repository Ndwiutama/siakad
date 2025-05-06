<?php

namespace App\Http\Controllers\Praja;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Praja;

class KhsController extends Controller
{
    public function index()
    {
        // Ambil data praja yang sedang login beserta nilai kehadiran
        $praja = Praja::with('user', 'nilaiKehadiran')->where('user_id', Auth::id())->first();
        
        // Jika praja tidak ditemukan, tampilkan pesan error di view
        if (!$praja) {
            session()->flash('error', 'Data praja tidak ditemukan');
        }
        
        return view('praja.khs', compact('praja'));
    }

    public function exportPdf()
    {
        $praja = Praja::with('user', 'nilaiKehadiran')->where('user_id', Auth::id())->first();
        
        // Jika praja tidak ditemukan, redirect dengan pesan error
        if (!$praja) {
            return redirect()->route('praja.dashboard')->with('error', 'Data praja tidak ditemukan');
        }
        
        $pdf = \PDF::loadView('praja.khs_pdf', compact('praja'));
        return $pdf->download('KHS_'.$praja->user->name.'.pdf');
    }
}

