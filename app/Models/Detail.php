<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $table = 'reservation_details';

    protected $fillable = [
        'reservation_id',
        'product_id',
        'service_name',
        'therapist_id',
        'qty',
        'note',
    ];
}