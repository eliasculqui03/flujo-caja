<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'razon_social',
        'tipo_documento_id',
        'numero_documento',
        'email',
        'direccion',
        'estado',
    ];

    protected $casts = [
        'estado' => 'boolean',
    ];

    public function tipoDocumento(): BelongsTo
    {
        return $this->belongsTo(TipoDocumento::class);
    }
}
