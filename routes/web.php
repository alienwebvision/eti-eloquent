<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/select', function () {
//    $users = User::all();
    $users=User::get();

//    foreach ($users as $user){
//        echo $user->name-;
//    }

    dd($users);
});

Route::get('/', function () {
    return view('welcome');
});
