<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Compra extends Model
{
    use HasFactory;

    protected $fillable = [
        'proveedor_id',
        'fecha_entrega',
        'subtotal',
        'igv',
        'total',
        'estado',
    ];

    protected $casts = [
        'subtotal' => 'float',
        'igv' => 'float',
        'total' => 'float',
    ];

    public function proveedor(): BelongsTo
    {
        return $this->belongsTo(Proveedor::class);
    }

    public function detalleCompra(): HasMany
    {
        return $this->hasMany(DetalleCompra::class);
    }
}
