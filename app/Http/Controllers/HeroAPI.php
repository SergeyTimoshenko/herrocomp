<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;
use Illuminate\Http\Response;

class HeroAPI extends Controller
{
    private $hero;
    public function __construct(Hero $hero)
    {
        $this->hero = $hero;
    }
    public function getAll() {
        $heroes = $this->hero->all();
        return response()->json($heroes);
    }
    public function showHero($id) {
        $hero = $this->hero->where('id', $id)->firstOrFail();
        return view('hero', ['hero', response()->json($hero)]);
    }
}
