<?php
namespace App\Http\Controllers\Praja;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KritikSaranController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'kritik' => 'required|string',
            'saran' => 'required|string',
        ]);

        // Simpan kritik dan saran ke database
        return redirect()->back()->with('success', 'Kritik dan saran berhasil dikirim.');
    }
}