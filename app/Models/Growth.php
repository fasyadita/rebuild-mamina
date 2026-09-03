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
        'child_id',
        'record_date',
        'age',
        'height',
        'weight',
        'head_circumference',
    ];

    protected $casts = [
        'record_date' => 'date',
        'height' => 'float',
        'weight' => 'float',
        'head_circumference' => 'float',
    ];

    public function kid()
    {
        return $this->belongsTo(Kid::class, 'child_id');
    }

    // Accessor so the view can use $growth->check_date
    public function getCheckDateAttribute()
    {
        return $this->record_date ? Carbon::parse($this->record_date) : null;
    }

    // Accessor so the view can use $growth->head_circumference
    // (This is not strictly needed anymore since the column is head_circumference, but kept for compatibility just in case)
    public function getHeadAttribute()
    {
        return $this->head_circumference;
    }
}
