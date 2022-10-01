<?php
//cada controller debe tener su propio directorio en vistas
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        //dd('hola mundo');//dump and dive
        return view('home.index');
        //retorna vista en directorio home, llamda index
    }

    public function login(){
        return view('home.login');
    }
}
