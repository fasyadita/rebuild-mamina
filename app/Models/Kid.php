<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kid extends Model
{
    protected $table = 'kids';

    public $timestamps = true;

    protected $fillable = [
        'customer_id',
        'name',
        'birthdate',
        'sex',
        'description',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
