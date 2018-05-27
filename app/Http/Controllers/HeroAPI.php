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
        return response()->json($hero);
    }
    public function addHero(Request $request) {
        $hero = new Hero();
        $hero->nickname = $request->nickname;
        $hero->real_name = $request->realName;
        $hero->origin_description = $request->description;
        $hero->superpowers = $request->superpower;
        $hero->catch_phrase = $request->cath;
        $hero->images = $request->image;

        $hero->save();
        
        return $request;
    }
    public function deleteHero($id) {
        $this->hero->where('id', $id)->delete();
        return $id;
    }
    public function updateHero(Request $request, $id) {
        $hero = $this->hero->where('id', $id)->update(['nickname'=>$request->nickname, 'real_name'=>$request->real_name, 'origin_description'=>$request->origin_description, 'superpowers'=>$request->superpowers, 'catch_phrase'=>$request->catch_phrase, 'images'=>$request->images]);
    }
}
