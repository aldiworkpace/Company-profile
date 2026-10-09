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
        'image_1',
        'image_2',
    ];
}
