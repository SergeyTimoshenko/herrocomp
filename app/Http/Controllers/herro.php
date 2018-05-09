<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;

class herro extends Controller
{
    private $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function addHero(Request $request) {

        $nickname = $request->input('nickname', 'No_Name');
        $real_name = $request->input('real_name', 'No_real_name');
        $origin_desctiption = $request->input('origin_desctiption', 'No_origin_desctiption');
        $superpowers = $request->input('superpowers', 'No_superpowers');
        $catch_phrase = $request->input('catch_phrase', 'No_catch_phrase');
        $image = $request->input('image', 'No_image');
        DB::insert('insert into hero (nickname, real_name, origin_description, superpowers, catch_phrase, images) values (?, ?, ?, ?, ?, ?)', [$nickname, $real_name, $origin_desctiption, $superpowers, $catch_phrase, $image]);
        return $nickname;

    }
    public function first($id) {
        // $db = Zend_Db::factory('mysqli',array('host' =>'127.0.0.1:3306', 'username' => 'root', 'password' => 'root', 'dbname' => 'test'));
        //$mysqli = mysqli_connect('127.0.0.1','root','','test');
        // $ret = $mysqli->query("INSERT * FROM users WHERE id = 1");

        //$first = DB::table('users')->where('id', 1)->first();
        $name = 'John';
        $email = 'John@exempl.li';
        $password = 'PaSs';
        //DB::insert('insert into users (name, email, password) values (?, ?, ?)', [$name, $email, $password]);
        $ret = DB::select('select * from users where id = :id', ['id' => $id]);
        return $ret;
    }

    public function index(Request $request) {

        return view('index');
    }

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
