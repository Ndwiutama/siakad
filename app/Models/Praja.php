<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Praja extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'npp',
        'angkatan',
        'program_studi',
        'tingkat',
        'wisma',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function nilaiKehadiran()
    {
        return $this->hasMany(\App\Models\NilaiKehadiran::class);
    }
} 