<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;

class HeroController extends Controller
{
    private $hero;
    public function __construct(Hero $hero)
    {
        $this->hero = $hero;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heroes = $this->hero->all();
        return view('allHero', ['heroes'=>$heroes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $hero = new Hero();
        $hero->nickname = $request->nickname;
        $hero->real_name = $request->real_name;
        $hero->origin_description = $request->origin_description;
        $hero->superpowers = $request->superpowers;
        $hero->catch_phrase = $request->catch_phrase;
        $hero->images = $request->images;

        $hero->save();


        return redirect('/heroes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $hero = Hero::where('id', $id)->firstOrFail();

        return view('hero', ['hero'=>$hero]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hero = Hero::where('id', $id)->firstOrFail();
        return view('update', ['hero'=>$hero]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $hero = Hero::where('id', $id)->update(['nickname'=>$request->nickname, 'real_name'=>$request->real_name, 'origin_description'=>$request->origin_description, 'superpowers'=>$request->superpowers, 'catch_phrase'=>$request->catch_phrase, 'images'=>$request->images]);
        return redirect('/heroes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hero::where('id', $id)->delete();
        
        return redirect('/heroes');
    }
}
