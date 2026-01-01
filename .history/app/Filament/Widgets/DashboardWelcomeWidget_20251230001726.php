<?php

namespace App\Filament\Widgets;

use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Filament\Widgets\Widget;

class DashboardWelcomeWidget extends Widget
{
    protected static string $view = 'filament.widgets.dashboard-welcome-widget';

    public function getStats(): array
    {
        return [
            'total_categories' => Category::count(),
            'total_products' => Product::count(),
            'total_users' => User::count(),
        ];
    }
}
