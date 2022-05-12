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
    public function formulario(){

        //SI SE ENVIA --> ECHO "OK"
       
        //mail("gerardmpgol@gmail.com","asuntillo","Este es el cuerpo del mensaje") ;
      
 
        //echo "The email message was sent.";
        echo "OK";
        //eN CASO DE UN ERROR --> ECHO ERROR
     }
}
