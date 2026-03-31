<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('home');
})->name('home');

// Página inicial
Route::get('/', function () {
    return view('splash');
})->name('splash');

Route::get('/perfil',[UsuarioController::class,'perfil']);
Route::get('/editar',[UsuarioController::class,'editar_perfil']);


// Outras páginas
Route::get('/laravel', function () {
    return view('welcome');
})->name('laravel');

Route::get('/servicos', function () {
    return view('servicos');
})->name('servicos');

Route::get('/loginn', function () {
    return view('loginuser');
})->name('loginn');



Route::get('/cadastro', function () {
    return view('cadastrouser');
})->name('cadastro');

Route::get('/sobre', function () {
    return view('sobre');
})->name('sobre');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');

Route::get('/reserva', function () {
    return view('reserva');
})->name('reserva');



Route::get('/formulario',[Testcontroller::class,'abrir_form']);
Route::get('/deleta_carro/{id_carro}',[TestController::class,'deleta_carro']);
Route::get('/alterarformulario/{id_carro}',[TestController::class,'vercarro']);
Route::get('/frota',[Testcontroller::class,'conta_marca']);

Route::get('/frota',[Testcontroller::class,'conta_marca']);





Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//Route::get('/dashboard', function () {
  //  return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
