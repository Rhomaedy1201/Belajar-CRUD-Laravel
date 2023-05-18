<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Model
{
    use HasFactory;

    protected $table = 'data_siswa';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nisn',
        'name',
        'tahun_masuk',
        'tahun_keluar',
    ];
}