<?php

namespace App\Http\Controllers\Praja;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:praja']);
    }

    public function index()
    {
        return view('praja.dashboard');
    }
}
