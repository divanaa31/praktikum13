<?php

namespace App\Filament\Pages;

use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Widgets\StatsOverviewWidget\Stat;

class Dashboard extends BaseDashboard
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Kategori', Category::count())
                ->description('Kategori produk')
                ->icon('heroicon-o-rectangle-stack')
                ->color('pink'),

            Stat::make('Total Produk', Product::count())
                ->description('Produk tersedia')
                ->icon('heroicon-o-cube')
                ->color('pink'),

            Stat::make('Total User', User::count())
                ->description('Pengguna terdaftar')
                ->icon('heroicon-o-user-group')
                ->color('pink'),
        ];
    }

    public function getColumns(): int
    {
        return 3;
    }
}
