<?php

namespace App\View\Components\Upload;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SingleFile extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name,
        public string $label = 'File',
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.upload.single-file');
    }
}
