<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departament extends Model
{
    protected $table='departaments';
    use HasFactory;

    public function children()
    {  
        
        return $this->hasMany(self::class, 'parent_id');
    }

    public function users()
    {
        return $this->hasMany(User::class,'department_id'); 
    }

    public function parent()
    {
        return $this->belongsTo(Department::class, 'parent_id');
    }
}