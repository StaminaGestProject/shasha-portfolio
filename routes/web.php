<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])->name("home");
Route::post("/contactme",
    function(){
        return view("welcome");
    })->name("contactez_moi");