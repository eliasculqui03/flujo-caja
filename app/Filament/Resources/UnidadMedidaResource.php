<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UnidadMedidaResource\Pages;
use App\Filament\Resources\UnidadMedidaResource\RelationManagers;
use App\Models\UnidadMedida;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UnidadMedidaResource extends Resource
{
    protected static ?string $model = UnidadMedida::class;

    protected static ?string $navigationGroup = 'Configuración';

    protected static ?string $navigationIcon = 'heroicon-o-bold';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('codigo')
                    ->required()
                    ->maxLength(4)
                    ->autocomplete(false),
                Forms\Components\TextInput::make('descripcion')
                    ->required()
                    ->maxLength(100)
                    ->autocomplete(false),
                Forms\Components\TextInput::make('simbolo')
                    ->required()
                    ->maxLength(10)
                    ->autocomplete(false),
                Forms\Components\Toggle::make('estado')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('codigo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('descripcion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('simbolo')
                    ->searchable(),
                Tables\Columns\IconColumn::make('estado')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageUnidadMedidas::route('/'),
        ];
    }
}
