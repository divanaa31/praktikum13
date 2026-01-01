<?php

namespace App\Filament\Resources\Categories\Pages;

use Filament\Actions\Acrion;
use App\Filament\Resources\Categories\CategoryResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCategory extends ViewRecord
{
    protected static string $resource = CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('back')
                ->label('Back to Categories')
                ->url(CatefgoryResource::getUrl('index')),
                    $this->getResource()::getUrl('edit', ['record' => $this->record])),
            EditAction::make(),
        ];
    }
}
