<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalMatkul extends Model
{
    use HasFactory;

    protected $fillable = [
        'dosen_id',
        'mata_kuliah',
        'kelas',
        'hari',
        'jam_mulai',
        'jam_selesai',
        'semester',
        'ruang',
    ];

    public function dosen()
    {
        return $this->belongsTo(User::class, 'dosen_id');
    }
} 