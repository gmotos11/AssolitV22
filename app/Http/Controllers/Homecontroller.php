<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
class Homecontroller extends Controller
{

    public function indexES(){  
        App::setLocale('es');
        $idioma='español';
        return view('index',['idioma' =>$idioma ]);
    }

    public function indexCA(){

      
        App::setLocale('ca');
        $idioma='catala';
        return view('index',['idioma' =>$idioma ]);
    }

    public function indexEN(){

        App::setLocale('en');
        $idioma='english';
        return view('index',['idioma' =>$idioma ]);
    }

<<<<<<< Updated upstream
    public function indexEE(){
=======
    public function indepppppppp(){
>>>>>>> Stashed changes

        App::setLocale('en');
        $idioma='english';
        return view('index',['idioma' =>$idioma ]);
    }



}
