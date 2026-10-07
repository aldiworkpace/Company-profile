<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketTravel extends Model
{
    //
    use HasFactory;

    protected $table = 'paket_travels';

    protected $fillable = [
        'nama_paket',
        'destinasi',
        'durasi_hari',
        'harga',
        'deskripsi',
        'image',
    ];
}
