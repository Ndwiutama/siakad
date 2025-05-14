<?php
namespace App\Http\Controllers\Praja;

use App\Http\Controllers\Controller;

class LayananController extends Controller
{
    public function index()
    {
        // Ambil data layanan dari database
        return view('praja.layanan');
    }
}