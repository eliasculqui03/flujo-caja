<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompraResource\Pages;
use App\Filament\Resources\CompraResource\RelationManagers;
use App\Models\Compra;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CompraResource extends Resource
{
    protected static ?string $model = Compra::class;

    protected static ?string $navigationGroup = 'Compras';
    //protected static ?int $navigationSort = 1;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make('Datos de Compra')
                    ->schema([
                        Forms\Components\Group::make()
                            ->schema(fn(string $operation) => match ($operation) {
                                'view' => [
                                    Placeholder::make('usuario')
                                        ->content(function ($record) {
                                            // Busca el usuario por el user_id del registro
                                            $user = \App\Models\User::find($record->user_id);
                                            return $user ? $user->name : 'Usuario no encontrado';
                                        })
                                        ->label('Usuario'),
                                ],
                                default => [
                                    Hidden::make('user_id')
                                        ->default(auth()->id())
                                        ->dehydrated(true)
                                        ->afterStateHydrated(function (Hidden $component) {
                                            $component->state(auth()->id());
                                        }),
                                    Placeholder::make('usuario')
                                        ->content(auth()->user()->name)
                                        ->label('Usuario'),
                                ],
                            })
                            ->columnSpan('full'),
                        Forms\Components\Select::make('proveedor_id')
                            ->relationship('proveedor', 'razon_social')
                            ->prefixIcon('heroicon-o-truck')
                            ->required()
                            ->preload()
                            ->searchable(),
                        Forms\Components\DateTimePicker::make('fecha_entrega')
                            ->required(),
                    ])->columns(2),

                Section::make('Detalles de Compra')
                    ->schema([
                        Repeater::make('detalleCompra')
                            ->label('')
                            ->relationship()
                            ->schema([
                                Forms\Components\Select::make('producto_id')
                                    ->relationship('producto', 'nombre')
                                    ->required()
                                    ->preload()
                                    ->searchable()
                                    ->live()
                                    ->columnSpanFull()
                                    ->distinct()
                                    ->disableOptionsWhenSelectedInSiblingRepeaterItems(),
                                Forms\Components\TextInput::make('cantidad')
                                    ->required()
                                    ->numeric()
                                    ->disabled()
                                    ->dehydrated()
                                    ->columnSpan(1),
                                Forms\Components\TextInput::make('precio')
                                    ->required()
                                    ->numeric()
                                    ->disabled()
                                    ->dehydrated()
                                    ->columnSpan(1),
                            ])

                            ->columns(2)
                            ->columnSpan('full')
                            ->grid(3),
                    ])->columns(3),

                Grid::make()
                    ->schema([
                        Forms\Components\TextInput::make('subtotal')
                            ->required()
                            ->numeric()
                            ->disabled(),
                        Forms\Components\TextInput::make('igv')
                            ->label('IGV (18%)')
                            ->required()
                            ->numeric()
                            ->disabled(),
                        Forms\Components\TextInput::make('total')
                            ->required()
                            ->numeric()
                            ->disabled(),
                    ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('proveedor.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('fecha_entrega')
                    ->searchable(),
                Tables\Columns\TextColumn::make('subtotal')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('igv')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('total')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('estado'),
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
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCompras::route('/'),
            'create' => Pages\CreateCompra::route('/create'),
            'edit' => Pages\EditCompra::route('/{record}/edit'),
        ];
    }
}
