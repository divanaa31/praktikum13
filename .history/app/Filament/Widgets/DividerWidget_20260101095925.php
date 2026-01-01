<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use Illuminate\View\View;

class DividerWidget extends Widget
{
    protected string $view = 'filament.widgets.divider-widget';

    protected static string $columnSpan = 'full';

    public function render(): View
    {
        return view($this->view);
    }
}
