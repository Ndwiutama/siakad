<?php
namespace App\Http\Controllers\Praja;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class KuesionerController extends Controller
{
    public function index(Request $request)
    {
        // Tentukan jenis halaman berdasarkan rute yang diakses
        $routeName = $request->route()->getName();

        // Data kuesioner (contoh statis, bisa diganti dengan query database)
        $kuesioner = [
            ['mata_kuliah' => 'B.xxx', 'dosen' => 'Dosen Mata Kuliah 1', 'jadwal' => 'xx April 2025 - xx Agustus 2025', 'status' => false],
            ['mata_kuliah' => 'B.xxx', 'dosen' => 'Dosen Mata Kuliah 2', 'jadwal' => 'xx April 2025 - xx Agustus 2025', 'status' => false],
            ['mata_kuliah' => 'B.xxx', 'dosen' => 'Dosen Mata Kuliah 3', 'jadwal' => 'xx April 2025 - xx Agustus 2025', 'status' => false],
        ];

        // Tentukan judul halaman berdasarkan rute
        $title = match ($routeName) {
            'praja.kuesioner' => 'Kuesioner',
            'praja.layanan' => 'Layanan',
            'praja.kritik-saran' => 'Kritik & Saran',
            default => 'Halaman',
        };

        return view('praja.kuesioner', compact('kuesioner', 'title'));
    }

    public function jawab(Request $request)
    {
        // Simpan jawaban ke database
        $jawaban = $request->input('jawaban');
        foreach ($jawaban as $index => $value) {
            // Simpan setiap jawaban (contoh)
            Log::info("Jawaban untuk pertanyaan {$index}: {$value}");
        }

        return redirect()->back()->with('success', 'Jawaban berhasil disimpan.');
    }
}
