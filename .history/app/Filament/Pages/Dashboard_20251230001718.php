<?php

namespace App\Filament\Pages;

use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Widgets\StatsOverviewWidget\Stat;

class Dashboard extends BaseDashboard
{
    public function getHeading(): string
    {
        $hour = now()->hour;
        
        if ($hour < 12) {
            $greeting = 'Selamat Pagi';
        } elseif ($hour < 15) {
            $greeting = 'Selamat Siang';
        } elseif ($hour < 18) {
            $greeting = 'Selamat Sore';
        } else {
            $greeting = 'Selamat Malam';
        }
        
        return $greeting . ', ' . (auth()->user()->name ?? 'Admin') . ' 👋';
    }

    protected function getStats(): array
    {
        return [
            Stat::make('📦 Total Kategori', Category::count())
                ->description('Kategori produk aktif')
                ->descriptionColor('success')
                ->icon('heroicon-o-rectangle-stack')
                ->color('pink')
                ->extraAttributes([
                    'class' => 'cursor-pointer',
                ]),

            Stat::make('🛍️ Total Produk', Product::count())
                ->description('Produk tersedia')
                ->descriptionColor('success')
                ->icon('heroicon-o-cube')
                ->color('pink')
                ->extraAttributes([
                    'class' => 'cursor-pointer',
                ]),

            Stat::make('👥 Total User', User::count())
                ->description('Pengguna terdaftar')
                ->descriptionColor('success')
                ->icon('heroicon-o-user-group')
                ->color('pink')
                ->extraAttributes([
                    'class' => 'cursor-pointer',
                ]),

            Stat::make('⭐ Rating Rata-rata', '4.8')
                ->description('Kepuasan pelanggan')
                ->descriptionColor('success')
                ->icon('heroicon-o-star')
                ->color('pink'),
        ];
    }

    public function getColumns(): int
    {
        return 4;
    }
}
