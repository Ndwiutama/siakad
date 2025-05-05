<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\Praja;
use Illuminate\Http\Request;

class DataPrajaController extends Controller
{
    public function index()
    {
        $prajas = Praja::with('user')->get();
        return view('dosen.data_praja', compact('prajas'));
    }
} 