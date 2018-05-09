<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;

class herro extends Controller
{
    private $hero;
    public function __construct(Hero $hero)
    {
        $this->hero = $hero;
    }

    public function index(){
        $hero = $this->hero->all();
        return view('allHero', ['hero'=>$hero]);
    }

    public function create(){
        return view('index');
    }

    public function store(Request $request) {

        dd($request->all());

        $this->hero->create([
            'nickname' => $request->nickaname,
            'real_name' => $request->real_name,
            'origin_description' => $request->origin_description,
            'superpowers' => $request->superpowers,
            'catch_phrase' => $request->catch_phrase,
            'images' => $request->images,
        ]);

        return redirect('/');

    }
//    public function first($id) {
//        // $db = Zend_Db::factory('mysqli',array('host' =>'127.0.0.1:3306', 'username' => 'root', 'password' => 'root', 'dbname' => 'test'));
//        //$mysqli = mysqli_connect('127.0.0.1','root','','test');
//        // $ret = $mysqli->query("INSERT * FROM users WHERE id = 1");
//
//        //$first = DB::table('users')->where('id', 1)->first();
//        $name = 'John';
//        $email = 'John@exempl.li';
//        $password = 'PaSs';
//        //DB::insert('insert into users (name, email, password) values (?, ?, ?)', [$name, $email, $password]);
//        $ret = DB::select('select * from users where id = :id', ['id' => $id]);
//        return $ret;
//    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function allHero() {
        $heros = DB::select('select * from hero');


        //dump($heros);
        return view('allHero', ['heros'=>$heros]);
    }
    public function allShow() {
        //$heros = DB::table('hero')->paginate(2);
        $ret = DB::select('select * from hero where id = :id', ['id' => 1]);
        //dump($ret);
        return $ret;
    }
    public function showmore($id) {
        $hero = DB::select('select * from hero where id = :id', ['id' => $id]);
        $hero = $hero[0];

        return view('hero', ['hero'=>$hero]);
    }
    public function delete($id) {
        DB::table('hero')->where('id', $id)->delete();
        //DB::select('delete * from hero where id = :id', ['id' => $id]);
        $heros = DB::select('select * from hero');
        //dump($heros);
        return view('allHero', ['heros'=>$heros]);
    }
    public function update($id) {
        $hero = DB::select('select * from hero where id = :id', ['id' => $id]);
        dump($hero);
        $hero = $hero[0];

        return view('update', ['hero'=>$hero]);
    }
    public function updateHero(Request $request) {

        $nickname = $request->input('nickname', 'No_Name');
        $real_name = $request->input('real_name', 'No_real_name');
        $origin_desctiption = $request->input('origin_desctiption', 'No_origin_desctiption');
        $superpowers = $request->input('superpowers', 'No_superpowers');
        $catch_phrase = $request->input('catch_phrase', 'No_catch_phrase');
        $image = $request->input('image', 'No_image');
        $id = $request->input('id', '0');
        DB::table('hero')
            ->where('id', $id)
            ->update(['nickname' => $nickname, 'real_name' => $real_name, 'origin_description' => $origin_desctiption, 'superpowers' => $superpowers, 'catch_phrase'=> $catch_phrase, 'images' => $image]);
        return $nickname;

    }
}
