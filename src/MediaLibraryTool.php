<?php

namespace Ebess\AdvancedNovaMediaLibrary;

use Illuminate\View\View;
use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class MediaLibraryTool extends Tool
{
    public function boot()
    {
        Nova::script('media-lib-images-tool', __DIR__.'/../dist/js/tool.js');
    }

    public function renderNavigation(): View
    {
        return view('advanced-nova-media-library::navigation');
    }
}
