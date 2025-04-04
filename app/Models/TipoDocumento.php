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


    public function tipoDocumentos(): HasMany
    {
        return $this->hasMany(TipoDocumento::class);
    }
}
