<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function detallesVenta()
    {
        return $this->hasMany(Detalles_venta::class, 'venta_id');
    }
}
