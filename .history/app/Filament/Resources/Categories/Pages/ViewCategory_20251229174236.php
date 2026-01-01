<?php

namespace App\Filament\Resources\Categories\Pages;

use Filament\Actions\Action;
use App\Filament\Resources\Categories\CategoryResource;
use Filament\Resources\Pages\ViewRecord;

class ViewCategory extends ViewRecord
{
    protected static string $resource = CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('back')
                ->label('Back to Categories')
                ->icon('heroicon-o-arrow-left')
                ->color('secondary')
                ->url(CategoryResource::getUrl('index')),
        ];
    }
}
