<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\UsuarioController;
use App\Http\Middleware\auth_api;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/teste',[TestController::class,'envia_teste']);


Route::get('/soma',[TestController::class,'soma']);



//tentativa de deixar o perfil sem o id na barra de pesquisa



//login e cadastro//

Route::post('/cadastro_de_usuario',[UsuarioController::class,'Cadastra_Usuario']);

Route::get('/login_novo',[UsuarioController::class,'login']);


//middle_cliente//
//reservarcarros//
//pagamento//
route::middleware(auth_api::class)->group(function(){
   Route::post('/busca_usuario',[UsuarioController::class,'busca_usuario']);
   Route::get('/verperfil',[UsuarioController::class,'perfil']);
});


//middleadm//

Route::post('/salva_carro',[TestController::class,'salva_carro']);

Route::delete('/deletar_carro',[Testcontroller::class,'deletar_carro']); 

Route::put('/alterar_carro',[Testcontroller::class,'alterar_carro']);

Route::get('/vem_carros',[TestController::class,'vem_carros']);

Route::get('/todos_carros',[TestController::class,'todos_carros']);

Route::delete('/deletar_carro',[Testcontroller::class,'deletar_carro']);

  