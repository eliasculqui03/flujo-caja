<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TipoDocumentoResource\Pages;
use App\Filament\Resources\TipoDocumentoResource\RelationManagers;
use App\Models\TipoDocumento;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TipoDocumentoResource extends Resource
{
    protected static ?string $model = TipoDocumento::class;

    protected static ?string $navigationGroup = 'Configuración';
    //protected static ?int $navigationSort = 1;

    protected static ?string $navigationIcon = 'heroicon-o-identification';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('tipo')
                    ->required()
                    ->maxLength(4)
                    ->autocomplete(false),
                Forms\Components\TextInput::make('descripcion_larga')
                    ->required()
                    ->maxLength(255)
                    ->autocomplete(false),
                Forms\Components\TextInput::make('descripcion_corta')
                    ->required()
                    ->maxLength(255)
                    ->autocomplete(false),
                Forms\Components\Toggle::make('estado')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tipo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('descripcion_larga')
                    ->searchable(),
                Tables\Columns\TextColumn::make('descripcion_corta')
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
            'index' => Pages\ManageTipoDocumentos::route('/'),
        ];
    }
}
