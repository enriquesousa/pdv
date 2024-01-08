<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    // Relación con 'employee_id' de la tabla 'advance_salary'
    public function advance()
    {
        return $this->belongsTo(AdvanceSalary::class, 'id', 'employee_id');
    }

    
}
