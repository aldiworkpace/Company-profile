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
        'visi',
        'misi',
        'desc_1',
        'desc_2',
        'hero_image',
        'image_1',
        'image_2',
        'image_3',

    ];
}
