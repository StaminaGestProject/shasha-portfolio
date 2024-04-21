<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Affichage de la page d'acceuil
    public function index(){
        return view("home/index");
    }
}
