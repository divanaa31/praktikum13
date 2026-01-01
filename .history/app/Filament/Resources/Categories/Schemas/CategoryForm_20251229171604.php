<?php

namespace App\Filament\Resources\Categories\Schemas;

use Dom\Text;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\TextInput;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
            ]);
    }
}
