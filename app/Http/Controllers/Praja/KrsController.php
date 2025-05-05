<?php

namespace App\Http\Controllers\Praja;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Praja;

class KrsController extends Controller
{
    public function index()
    {
        // Ambil data praja yang sedang login beserta nilai kehadiran
        $praja = Praja::with('user', 'nilaiKehadiran')->where('user_id', Auth::id())->first();
        return view('praja.krs', compact('praja'));
    }

    public function exportPdf()
    {
        $praja = Praja::with('user', 'nilaiKehadiran')->where('user_id', Auth::id())->first();
        $pdf = \PDF::loadView('praja.krs_pdf', compact('praja'));
        return $pdf->download('KRS_'.$praja->user->name.'.pdf');
    }
} 