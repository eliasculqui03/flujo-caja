<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoDocumento extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo',
        'descripcion_larga',
        'descripcion_corta',
        'estado',
    ];


    protected $casts = [
        'estado' => 'boolean',
    ];


    public function proveedor(): HasMany
    {
        return $this->hasMany(Proveedor::class);
    }

    public function cliente(): HasMany
    {
        return $this->hasMany(Cliente::class);
    }
}
