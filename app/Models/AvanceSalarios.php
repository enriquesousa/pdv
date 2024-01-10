<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvanceSalarios extends Model
{
    use HasFactory;

    // Relación con 'id' del empleado
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }
    
}
