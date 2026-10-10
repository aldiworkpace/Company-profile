<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Home extends Model
{
    use HasFactory;

    protected $table = 'homes';

    protected $fillable = [
        'deskripsi_1',
        'deskripsi_2',
        'deskripsi_3',
        'cta_judul_1',
        'cta_judul_2',
        'cta_judul_3',
        'cta_desc1',
        'cta_desc2',
        'cta_desc3',
        'hero_image',
        'image_1',
        'image_2',
        'image_3',
    ];
}
