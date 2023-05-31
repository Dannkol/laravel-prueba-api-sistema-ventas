<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalles_venta extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function productos(){
        return $this->belongsTo(Producto::class, 'producto_id');
    }

    public function ventas(){

        return $this->belongsTo(Venta::class, 'venta_id');
    }
}
