<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class menampilkanview extends Controller
{
    //
    public function dashboard(){
        return view('dashboard');
    }

    public function icons(){
        return view('icons');
    }

    public function maps(){
        return view('maps');
    }

    public function notifications(){
        return view('notifications');
    }

    public function user(){
        return view('user');
    }

    public function tables(){
        return view('tables');
    }

    public function typography(){
        return view('typography');
    }

    public function upgrade(){
        return view('upgrade');
    }
}
