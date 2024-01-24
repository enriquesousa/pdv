<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Product;

class OrderDetails extends Model
{
    use HasFactory;
    protected $guarded = [];

    // Relación con id de Productos
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
