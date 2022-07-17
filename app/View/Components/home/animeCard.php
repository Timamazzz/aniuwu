<?php

namespace App\View\Components\home;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class animeCard extends Component
{
    public string $link, $img, $animeName;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($link, $img, $animeName)
    {
        $this->link = $link;
        $this->img = $img;
        $this->animeName = $animeName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('components.home.anime-card');
    }
}
