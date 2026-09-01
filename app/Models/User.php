<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The table associated with the model.
     * (Opsional: hapus baris ini jika nama tabel Anda adalah 'users')
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'company_id',
        'branch_id',
        'google_id',
        'username',
        'password',
        'fcm_token',
        'mobile_token',
        'name',
        'address',
        'birthdate',
        'phone',
        'email',
        'ig',
        'sex',
        'joined_at',
        'roles',
        'display',
        'area',
        'online',
        'offline',
        'cover',
        'thumb',
        'is_active',
        'is_pusat',
        'is_tim',
        'last_login_web',
        'last_login_mobile',
        'email_verified_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

}