<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|unique:users',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required|in:admin,dosen,praja',
            'status' => 'required|in:aktif,nonaktif',
            'nip' => 'nullable|string|max:255',
            'jabatan' => 'nullable|string|max:255',
            'program_studi' => 'nullable|string|max:255',
            'npp' => 'nullable|string|max:255|unique:prajas',
            'angkatan' => 'nullable|integer',
            'program_studi_praja' => 'nullable|string|max:255',
            'tingkat' => 'nullable|integer',
            'wisma' => ($request->role === 'praja' ? 'required' : 'nullable') . '|string|max:255',
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'status' => $request->status,
            'nip' => $request->nip,
            'jabatan' => $request->jabatan,
            'program_studi' => $request->program_studi,
        ]);

        // Jika role adalah praja, buat data praja
        if ($request->role === 'praja') {
            \App\Models\Praja::create([
                'user_id' => $user->id,
                'npp' => $request->npp,
                'angkatan' => $request->angkatan,
                'program_studi' => $request->program_studi_praja,
                'tingkat' => $request->tingkat,
                'wisma' => $request->wisma,
                'status' => $request->status
            ]);
        }

        return redirect()->route('admin.users.index')->with('success', 'User berhasil ditambahkan');
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|unique:users,username,' . $user->id,
            'email' => 'required|string|email|unique:users,email,' . $user->id,
            'role' => 'required|in:admin,dosen,praja',
            'status' => 'required|in:aktif,nonaktif',
            'nip' => 'nullable|string|max:255',
            'jabatan' => 'nullable|string|max:255',
            'program_studi' => 'nullable|string|max:255',
            'wisma' => 'nullable|string|max:255',
        ]);

        $user->update($request->except('password'));
        
        if ($request->filled('password')) {
            $user->update(['password' => Hash::make($request->password)]);
        }

        // Update data praja jika role adalah praja
        if ($request->role === 'praja') {
            $praja = $user->praja;
            if ($praja) {
                $praja->update([
                    'wisma' => $request->wisma,
                    'status' => $request->status
                ]);
            } else {
                \App\Models\Praja::create([
                    'user_id' => $user->id,
                    'wisma' => $request->wisma,
                    'status' => $request->status
                ]);
            }
        }

        return redirect()->route('admin.users.index')->with('success', 'User berhasil diperbarui');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'User berhasil dihapus');
    }
} 