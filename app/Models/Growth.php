<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Growth extends Model
{
    use HasFactory;

    protected $table = 'growth';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'kid_id',
        'date',
        'height',
        'weight',
        'head',
        'photo',
    ];

    protected $casts = [
        'date' => 'date',
        'height' => 'float',
        'weight' => 'float',
        'head' => 'float',
    ];

    public function kid()
    {
        return $this->belongsTo(Kid::class, 'kid_id');
    }

    // Accessor so the view can use $growth->check_date
    public function getCheckDateAttribute()
    {
        return $this->date ? Carbon::parse($this->date) : null;
    }

    // Accessor so the view can use $growth->head_circumference
    public function getHeadCircumferenceAttribute()
    {
        return $this->head;
    }
}
