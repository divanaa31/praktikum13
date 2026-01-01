<?php

namespace App\Filament\Widgets;

use App\Models\Product;
use Filament\Widgets\Widget;
use Illuminate\View\View;

class RecentProductsWidget extends Widget
{
    protected string $view = 'filament.widgets.recent-products-widget';

    public function getRecentProducts(): array
    {
        return Product::latest()
            ->take(5)
            ->get()
            ->map(fn ($product) => [
                'name' => $product->name,
                'price' => 'Rp ' . number_format($product->price, 0, ',', '.'),
                'category' => $product->category?->name ?? 'N/A',
                'created_at' => $product->created_at->format('d M Y'),
            ])
            ->toArray();
    }

    public function render(): View
    {
        return view($this->view, [
            'products' => $this->getRecentProducts(),
        ]);
    }
}
