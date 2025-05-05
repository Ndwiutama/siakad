<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\NilaiKehadiran;
use App\Models\Praja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NilaiKehadiranResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nilaiKehadiran = NilaiKehadiran::with(['praja.user', 'dosen'])->get();
        return view('dosen.nilai_kehadiran.index', compact('nilaiKehadiran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prajas = Praja::with('user')->get();
        return view('dosen.nilai_kehadiran.create', compact('prajas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'praja_id' => 'required|exists:prajas,id',
            'semester' => 'required',
            'mata_kuliah' => 'required',
            'kelas' => 'nullable',
            'kehadiran' => 'nullable|integer',
            'tugas' => 'nullable|integer',
            'uts' => 'nullable|integer',
            'uas' => 'nullable|integer',
            'nilai_akhir' => 'nullable|integer',
        ]);
        NilaiKehadiran::create([
            'praja_id' => $request->praja_id,
            'dosen_id' => Auth::id(),
            'semester' => $request->semester,
            'mata_kuliah' => $request->mata_kuliah,
            'kelas' => $request->kelas,
            'kehadiran' => $request->kehadiran,
            'tugas' => $request->tugas,
            'uts' => $request->uts,
            'uas' => $request->uas,
            'nilai_akhir' => $request->nilai_akhir,
        ]);
        return redirect()->route('dosen.nilai-kehadiran.index')->with('success', 'Data nilai & kehadiran berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(NilaiKehadiran $nilaiKehadiran)
    {
        $nilaiKehadiran->load(['praja.user', 'dosen']);
        return view('dosen.nilai_kehadiran.show', compact('nilaiKehadiran'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NilaiKehadiran $nilaiKehadiran)
    {
        $prajas = Praja::with('user')->get();
        return view('dosen.nilai_kehadiran.edit', compact('nilaiKehadiran', 'prajas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NilaiKehadiran $nilaiKehadiran)
    {
        $request->validate([
            'praja_id' => 'required|exists:prajas,id',
            'semester' => 'required',
            'mata_kuliah' => 'required',
            'kelas' => 'nullable',
            'kehadiran' => 'nullable|integer',
            'tugas' => 'nullable|integer',
            'uts' => 'nullable|integer',
            'uas' => 'nullable|integer',
            'nilai_akhir' => 'nullable|integer',
        ]);
        $nilaiKehadiran->update([
            'praja_id' => $request->praja_id,
            'dosen_id' => Auth::id(),
            'semester' => $request->semester,
            'mata_kuliah' => $request->mata_kuliah,
            'kelas' => $request->kelas,
            'kehadiran' => $request->kehadiran,
            'tugas' => $request->tugas,
            'uts' => $request->uts,
            'uas' => $request->uas,
            'nilai_akhir' => $request->nilai_akhir,
        ]);
        return redirect()->route('dosen.nilai-kehadiran.index')->with('success', 'Data nilai & kehadiran berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NilaiKehadiran $nilaiKehadiran)
    {
        $nilaiKehadiran->delete();
        return redirect()->route('dosen.nilai-kehadiran.index')->with('success', 'Data nilai & kehadiran berhasil dihapus');
    }
}
