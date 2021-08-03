<?php

use App\Http\Resources\UserCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Resources\UserResource;

Route::get('/exemplo', function (Request $request) {
    // individual
    $usuarioIndividual = User::find(1);
    return new UserResource($usuarioIndividual);

    // collection (vários)
    // $variosUsuarios = User::get();
    // return new UserCollection($variosUsuarios);



});
