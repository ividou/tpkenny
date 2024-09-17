<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;
    public function pedido()
{
    return $this->belongsTo(Pedido::class);
}
protected $fillable = [
    'pedido_id',
    'monto',
    'fecha_pago',
    'metodo_pago',
];
}
