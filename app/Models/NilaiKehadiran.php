<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiKehadiran extends Model
{
    use HasFactory;

    protected $fillable = [
        'praja_id',
        'dosen_id',
        'semester',
        'mata_kuliah',
        'kelas',
        'kehadiran',
        'tugas',
        'uts',
        'uas',
        'nilai_akhir',
    ];

    public function praja()
    {
        return $this->belongsTo(Praja::class);
    }

    public function dosen()
    {
        return $this->belongsTo(User::class, 'dosen_id');
    }
}
