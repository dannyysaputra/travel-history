<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class travel extends Model
{
    use HasFactory;

    protected $table = 'travel';
    protected $fillable = [
        'id_user',
        'tanggal',
        'lokasi',
        'suhu'
    ];
}