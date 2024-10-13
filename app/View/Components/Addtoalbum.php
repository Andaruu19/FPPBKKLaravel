<?php

namespace App\View\Components;

use Closure;
use App\Models\Album;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Addtoalbum extends Component
{
    public $movieId;

    public function __construct($movieId = null)
    {
        $this->movieId = $movieId;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.addtoalbum', [
            'albums' => Album::all()
        ]);
    }
}
