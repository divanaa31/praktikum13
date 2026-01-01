<?php

namespace App\Filament\Pages;

use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Filament\Widgets\DashboardWelcomeWidget;
use App\Filament\Widgets\RecentProductsWidget;
use App\Filament\Widgets\DividerWidget;

class Dashboard extends BaseDashboard
{
    public function getHeading(): string
    {
        return 'Dashboard';
    }

    protected function getStats(): array
    {
        return [
            Stat::make('Total Kategori', Category::count())
                ->description('Kategori produk')
                ->descriptionColor('success')
                ->icon('heroicon-o-rectangle-stack')
                ->color('rose'),

            Stat::make('Total Produk', Product::count())
                ->description('Produk tersedia')
                ->descriptionColor('success')
                ->icon('heroicon-o-cube')
                ->color('rose'),

            Stat::make('Total User', User::count())
                ->description('Pengguna terdaftar')
                ->descriptionColor('success')
                ->icon('heroicon-o-user-group')
                ->color('rose'),
        ];
    }

    public function getColumns(): int
    {
        return 12;
    }

    public function getWidgets(): array
    {
        return [
            DashboardWelcomeWidget::class,
            RecentProductsWidget::class,
        ];
    }
}
