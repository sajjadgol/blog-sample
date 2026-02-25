<?php

use App\Models\User;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get("/test" , function(){ 
    $users = User::factory()->create();

    return [User::all()];
});