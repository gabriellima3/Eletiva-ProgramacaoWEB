<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('usuarios')->group(function(){
    Route::get('', function(){
        return 'usuario';
    });
    Route::get('/{id}', function($id){
        return 'Mostrar detalhes de usuario' .$id;
    });
    Route::get('/{id}/tags', function($id){
        return 'Tags Usuarios' .$id;
    });

});

Route::get('/users/{id}', function($id = null){
    return 'Id Usuario' .$id;
});


Route::get('/', function () {
    return view('welcome');
});
