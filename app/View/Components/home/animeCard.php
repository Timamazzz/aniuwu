<?php

namespace App\View\Components\home;

use App\Models\Anime;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class animeCard extends Component
{
    public string $image, $name, $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($image, $name, $id)
    {
        $this->image = $image;
        $this->name = $name;
        $this->id = $id;
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
