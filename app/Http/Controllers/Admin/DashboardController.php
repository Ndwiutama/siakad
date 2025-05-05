<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:admin']);
    }

    public function index()
    {
        $totalUsers = User::count();
        $totalDosen = User::where('role', 'dosen')->count();
        $totalPraja = User::where('role', 'praja')->count();
        
        return view('admin.dashboard', compact('totalUsers', 'totalDosen', 'totalPraja'));
    }

    // Menampilkan daftar dosen dari tabel users (role = dosen)
    public function indexDosen()
    {
        $dosens = \App\Models\User::where('role', 'dosen')->get();
        return view('admin.dosen', compact('dosens'));
    }

    public function indexPraja()
    {
        $prajas = \App\Models\Praja::with('user')->get();
        return view('admin.praja', compact('prajas'));
    }
}
