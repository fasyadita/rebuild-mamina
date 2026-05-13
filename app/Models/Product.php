<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'vendor_id',
        'category_id',
        'product_kind',
        'product_type',
        'service_type',
        'name',
        'kategori',
        'description',
        'duration',
        'image',
        'thumb',
        'sale_price',
        'file_size',
        'cost_price',
        'discount_percentage',
        'discount_amount',
        'stok',
        'is_voucher',
        'is_show',
        'is_active',
    ];

    protected $casts = [
        'vendor_id' => 'integer',
        'category_id' => 'integer',
        'duration' => 'integer',
        'sale_price' => 'double',
        'file_size' => 'double',
        'cost_price' => 'double',
        'discount_percentage' => 'double',
        'discount_amount' => 'double',
        'stok' => 'integer',
        'is_voucher' => 'boolean',
        'is_show' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }
}
