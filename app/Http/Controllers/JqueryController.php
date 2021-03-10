<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\UsuariosModel;
use App\Municipio;
use App\Estado;
use App\User;

class JqueryController extends Controller
{
    public function js00(Request $request){
        $email=$request->get('email');
        //dd($email)
        $usu= UsuariosModel::where('email', $email)->get();
        return view("jquery/js_00")
            ->with(['usu'=>$usu]);
    }
    public function js02(Request $request){
        if($request->ajax()){
           $municipios=Municipio::where('id_estado', $request->id_estado)->get();
           foreach ($municipios as $municipio){
               $municipioshelp[$municipio->id_municipio]=$municipio->nombre;
           }
           return response()->json($municipioshelp);
        } 
    }
    public function js02b(Request $request){
        $id_municipio=$request->get('id_municipio');
        //dd($id_municipio);
        $usu=UsuariosModel::all();
        return view('jquery/js02b',[
            'usu'=>$usu
        ]);
    }

}
