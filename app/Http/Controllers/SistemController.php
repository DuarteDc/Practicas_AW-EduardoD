<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\UsuariosModel;
use App\Estado;
use App\Municipio;

class SistemController extends Controller
{
    public function entrada(){
        return view('entrada');
    }
    public function combo(){
        $estados=Estado::all();
        return view('combo',[
            'estados'=>$estados
        ]);
    }
    public function datos(Request $request){
        dd($request->all());
        /*$estados=Estado::all();
        return view('combos',[
            'estados'=>$estados
        ]);*/
        return redirect()->route('combo');
    }   
}
