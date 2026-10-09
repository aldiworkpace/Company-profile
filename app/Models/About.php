<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class About extends Model
{
    //
    use HasFactory;

    protected $table = 'abouts';

    protected $fillable = [
        'judul',
        'deskripsi_1',
        'deskripsi_2',
        'image_1',
        'image_2',
    ];
}
