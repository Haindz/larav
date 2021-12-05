<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class menampilkanview extends Controller
{
    //
    public function template(){
        return view('template');
    }

    public function testimoni(){
        return view('partisi.testimoni');
    }

    public function login(){
        return view('partisi.login');
    }

    public function register(){
        return view('partisi.register');
    }

    public function faq(){
        return view('partisi.faq');
    }

    public function info(){
        return view('partisi.info');
    }

    public function ml1(){
        return view('ml1');
    }

    public function ml2(){
        return view('ml2');
    }

    public function ml3(){
        return view('ml3');
    }

    public function pubg1(){
        return view('pubg1');
    }

    public function pubg2(){
        return view('pubg2');
    }

    public function pubg3(){
        return view('pubg3');
    }

    public function ff1(){
        return view('ff1');
    }

    public function ff2(){
        return view('ff2');
    }

    public function ff3(){
        return view('ff3');
    }

    public function forgetpass(){
        return view('partisi.forgetpass');
    }

    public function checkout(){
        return view('partisi.checkout');
    }
}
