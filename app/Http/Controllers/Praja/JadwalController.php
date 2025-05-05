<?php

namespace App\Http\Controllers\Praja;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JadwalMatkul;
use Illuminate\Support\Facades\Auth;

class JadwalController extends Controller
{
    public function index()
    {
        // Ambil semua jadwal matakuliah
        $jadwals = JadwalMatkul::with('dosen')
            ->orderBy('hari')
            ->orderBy('jam_mulai')
            ->get();

        return view('praja.jadwal', compact('jadwals'));
    }
} 