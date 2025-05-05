<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:dosen']);
    }

    public function index()
    {
        return view('dosen.dashboard');
    }
}
