<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        //return 'Usuarios Registrados';


        if(request()->has('empty')){
              $user = [];

        }else{

            




            $user = [
                'Elsi Arenivar',
                'Karla Penado',
                'Andrea Krip',
                'Santos Alvarenga',
                'Miguel Leon'
                
     
             ];    
     

        }

        $titulo = 'Usuarios Registrados';


        return View('users.index',
         [      
             
            'user'=>$user,
            'title'=>$titulo
        
        
        ]);

    }


    public function show($id){
           return view('users.show', compact('id'));
        
    }


    public function create(){
        return "Crear Nuevo Usuario";
    }
}
