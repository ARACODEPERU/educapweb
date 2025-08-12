<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class SaleProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'sale_id',
        'product_id',
        'product',
        'price',
        'discount',
        'quantity',
        'total',
        'saleProduct',
        'entity_name_product'
    ];

    protected $casts = [
        'product' => 'array',
        'saleProduct' => 'array'
    ];
    public function sale()
    {
        return $this->belongsTo(Sale::class, 'sale_id', 'id');
    }
    // Nueva relación con AcaCourse
    public function course()
    {
        return $this->belongsTo(AcaCourse::class, 'product_id');
    }
}
