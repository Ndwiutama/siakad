<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\Praja;
use Illuminate\Http\Request;

class NilaiKehadiranController extends Controller
{
    public function index()
    {
        $prajas = Praja::with('user')->get();
        return view('dosen.nilai_kehadiran', compact('prajas'));
    }
} 