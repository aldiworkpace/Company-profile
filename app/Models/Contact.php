<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    //
    use HasFactory;

    protected $table = 'contacts';

    protected $fillable = [
        'deskripsi_1',
        'deskripsi_2',
        'image_1',
        'image_2',
    ];
}
