<?php

namespace App\View\Components;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Entry extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $id, public string $title, public string $date, public string $description)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.entry');
    }
}