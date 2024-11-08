<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $nome = 'Lésio Luis';
        $arr = ['carro'=>'nao tenho', 'casa'=>'nao tenho tambem'];
        $tteste = ['Coisas', 134, 'Vamos ver néh'];
        return view('posts.index', ['nome'=>$nome, 'arr'=>$arr, 'teste'=>$tteste]);
    }
}
