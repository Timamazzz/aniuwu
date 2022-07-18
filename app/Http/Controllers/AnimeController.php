<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function index($id): Factory|View|Application
    {
        $anime = Anime::Find($id);
        return view('anime.index', ['anime' => $anime]);
    }
}
