<?php

namespace App\Filament\Resources;

use App\Models\Product;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Filament\Resources\Products\Schemas\ProductForm;
use App\Filament\Resources\Products\Tables\ProductsTable;
use App\Filament\Resources\ProductResource\Pages;
use UnitEnum;

class ProductResource extends Resource
{
    // WAJIB
    protected static ?string $model = Product::class;

    // TIPE HARUS SAMA DENGAN PARENT
    protected static string|UnitEnum|null $navigationIcon = 'heroicon-o-cube';
    protected static string|UnitEnum|null $navigationLabel = 'Produk';
    protected static string|UnitEnum|null $navigationGroup = 'Master Data';

    public static function form(Form $form): Form
    {
        return $form->schema(ProductForm::schema());
    }

    public static function table(Table $table): Table
    {
        return ProductsTable::table($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'view' => Pages\ViewProduct::route('/{record}'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
