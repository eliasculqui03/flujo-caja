<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UnidadMedida extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'descripcion',
        'simbolo',
        'estado',
    ];

    protected $casts = [
        'estado' => 'boolean',
    ];

    public function producto(): HasMany
    {
        return $this->hasMany(Producto::class);
    }
}
