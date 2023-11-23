<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    public function marca() 
    {
        return $this->belongsTo(Marca::class);
    }
    public function producto() 
    {
        return $this->hasMany(Producto::class);
    }
}
