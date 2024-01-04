<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private $myvar = "Hello world";

    function _MyController(){

    }

    public function index(){
        return view('home');
        // echo $this -> myvar;
    }

    public function store(Request $req){
        $data['number'] = $req -> input('number');
        return view('multi.multi_result', $data);
    }
}


?>
