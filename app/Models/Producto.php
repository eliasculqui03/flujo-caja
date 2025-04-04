<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'codigo',
        'categoria_id',
        'unidad_medida_id',
        'precio_compra',
        'precio_venta',
        'informacion',
        'estado',
    ];

    protected $casts = [
        'estado' => 'boolean',
        'precio_compra' => 'float',
        'precio_venta' => 'float',
    ];

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

    public function unidadMedida(): BelongsTo
    {
        return $this->belongsTo(UnidadMedida::class);
    }
}
