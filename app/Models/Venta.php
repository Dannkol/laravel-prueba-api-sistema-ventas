<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function clientes()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function detallesVenta()
    {
        return $this->hasMany(Detalles_venta::class, 'venta_id');
    }
}
