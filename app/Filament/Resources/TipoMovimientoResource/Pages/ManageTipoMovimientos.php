<?php

namespace App\Filament\Resources\TipoMovimientoResource\Pages;

use App\Filament\Resources\TipoMovimientoResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageTipoMovimientos extends ManageRecords
{
    protected static string $resource = TipoMovimientoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
