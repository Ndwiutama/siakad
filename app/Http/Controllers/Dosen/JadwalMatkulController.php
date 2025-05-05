<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JadwalMatkul;
use Illuminate\Support\Facades\Auth;

class JadwalMatkulController extends Controller
{
    public function index()
    {
        $jadwals = JadwalMatkul::where('dosen_id', Auth::id())->get();
        return view('dosen.jadwal_matkul.index', compact('jadwals'));
    }

    public function create()
    {
        return view('dosen.jadwal_matkul.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'mata_kuliah' => 'required',
            'kelas' => 'nullable',
            'hari' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'semester' => 'required|integer',
            'ruang' => 'nullable',
        ]);
        JadwalMatkul::create([
            'dosen_id' => Auth::id(),
            'mata_kuliah' => $request->mata_kuliah,
            'kelas' => $request->kelas,
            'hari' => $request->hari,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'semester' => $request->semester,
            'ruang' => $request->ruang,
        ]);
        return redirect()->route('dosen.jadwal-matkul.index')->with('success', 'Jadwal berhasil ditambahkan');
    }

    public function edit(JadwalMatkul $jadwalMatkul)
    {
        return view('dosen.jadwal_matkul.edit', compact('jadwalMatkul'));
    }

    public function update(Request $request, JadwalMatkul $jadwalMatkul)
    {
        $request->validate([
            'mata_kuliah' => 'required',
            'kelas' => 'nullable',
            'hari' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'semester' => 'required|integer',
            'ruang' => 'nullable',
        ]);
        $jadwalMatkul->update($request->only([
            'mata_kuliah', 'kelas', 'hari', 'jam_mulai', 'jam_selesai', 'semester', 'ruang'
        ]));
        return redirect()->route('dosen.jadwal-matkul.index')->with('success', 'Jadwal berhasil diupdate');
    }

    public function show(JadwalMatkul $jadwalMatkul)
    {
        return view('dosen.jadwal_matkul.show', compact('jadwalMatkul'));
    }

    public function destroy(JadwalMatkul $jadwalMatkul)
    {
        $jadwalMatkul->delete();
        return redirect()->route('dosen.jadwal-matkul.index')->with('success', 'Jadwal berhasil dihapus');
    }
} 