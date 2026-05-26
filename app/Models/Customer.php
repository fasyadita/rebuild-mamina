<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Field yang boleh diisi mass assignment
     */
    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'province_id',
        'religion',
        'city_id',
        'district_id',
        'village_id',
        'sex',
        'birthdate',
        'ig',
        'occupation',
        'image',
        'password',
        'code',
        'level',
        'points',
        'branch_id',
        'referrer',
        'is_active',
        'register_via',
    ];

    /**
     * Hidden attributes
     */
    protected $hidden = [
        'password',
    ];

    public function kids()
    {
        return $this->hasMany(Kid::class, 'customer_id');
    }
}