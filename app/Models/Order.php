<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Customer;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    // Relación con 'id' del Cliente
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }

}
