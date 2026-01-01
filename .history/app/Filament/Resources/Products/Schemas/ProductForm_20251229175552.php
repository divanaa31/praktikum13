<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms;
use Filament\Forms\Form;

class ProductForm
{
    public static function schema(): array
    {
        return [
            Forms\Components\TextInput::make('name')
                ->label('Nama Produk')
                ->required()
                ->maxLength(255),

            Forms\Components\Select::make('category_id')
                ->label('Kategori')
                ->relationship('category', 'name')
                ->searchable()
                ->required(),

            Forms\Components\TextInput::make('price')
                ->label('Harga')
                ->numeric()
                ->required(),

            Forms\Components\Textarea::make('description')
                ->label('Deskripsi')
                ->columnSpanFull(),
        ];
    }
}
