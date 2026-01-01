<?php

namespace App\Filament\Resources\Products\Pages;

use Filament\Actions\Action;
use App\Filament\Resources\Products\ProductResource;
use Filament\Resources\Pages\ViewRecord;

class ViewProduct extends ViewRecord
{
    protected static string $resource = ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('back')
                ->label('Back to Products')
                ->icon('heroicon-o-arrow-left')
                ->color('secondary')
                ->url(ProductResource::getUrl('index')),
        ];
    }
}
