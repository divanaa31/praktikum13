<?php

namespace App\Filament\Widgets;

use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Filament\Widgets\Widget;
use Illuminate\View\View;

class DashboardWelcomeWidget extends Widget
{
    protected string $view = 'filament.widgets.dashboard-welcome-widget';

    public function getStats(): array
    {
        return [
            'total_categories' => Category::count(),
            'total_products' => Product::count(),
            'total_users' => User::count(),
        ];
    }

    public function render(): View
    {
        return view($this->view, [
            'stats' => $this->getStats(),
        ]);
    }
}
