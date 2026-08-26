<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    protected $table = 'reservations';

    protected $fillable = [
        'id_number',
        'branch_id',
        'sale_type',
        'nama_cust',
        'nama_anak',
        'usia_kehamilan',
        'usia_anak',
        'no_tlp',
        'tanggal',
        'sesi',
        'status',
        'note',
        'user_id',
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];
}