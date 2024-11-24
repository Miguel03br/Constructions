<?php

//php artisan make:controller UserController --resource
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConstructionController;
use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\AvisoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/constructions', [ConstructionController::class, 'index'])->name('ConstructionController.index');
Route::get('/constructions/create', [ConstructionController::class,'create'])->name('ConstructionController.create');
Route::get('/constructions/store', [ConstructionController::class,'store'])->name('ConstructionController.store');
Route::get('/constructions/{id}', [ConstructionController::class,'edit'])->name('ConstructionController.show');
Route::get('/constructions/edit/{id}', [ConstructionController::class,'edit'])->name('ConstructionController.edit');
Route::put('/constructions/update/{id}', [ConstructionController::class,'update'])->name('ConstructionController.update');
Route::delete('/constructions/destroy/{id}', [ConstructionController::class,'destroy'])->name('ConstructionController.destroy');


    

    Route::get('/constructions/armazenar', function($nome = 'nome'){
        return view('constructions', ['nome' => $nome]);
    });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/user', [UserController::class, 'index'])->name('UserController.index');
Route::get('/user/create', [UserController::class,'create'])->name('UserController.create');
Route::get('/user/store', [UserController::class,'store'])->name('UserController.store');
Route::get('/user/edit/{id}', [UserController::class,'edit'])->name('UserController.edit');
Route::put('/user/update/{id}', [UserController::class,'update'])->name('UserController.update');
Route::delete('/user/destroy/{id}', [UserController::class,'destroy'])->name('UserController.destroy');

    

    Route::get('/user', function($id = 'id'){
        return view('user', ['id' => $id]);
    });

    Route::get('/user', function($nome = 'nome'){
        return view('user', ['nome' => $nome]);
    });

    Route::get('/user', function($idade = 'idade'){
        return view('user', ['idade' => $idade]);
    });

    Route::get('/user', function($email = 'email'){
        return view('user', ['email' => $email]);
    });

    Route::get('/user', function($senha = 'senha'){
        return view('user', ['senha' => $senha]);
    });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/avisos', [AvisoController::class, 'index'])->name('AvisoController.index');
Route::get('/avisos/create', [AvisoController::class,'create'])->name('AvisoController.create');
Route::get('/avisos/store', [AvisoController::class,'store'])->name('AvisoController.store');
Route::get('/avisos/edit/{id}', [AvisoController::class,'edit'])->name('AvisoController.edit');
Route::put('/avisos/update/{id}', [AvisoController::class,'update'])->name('AvisoController.update');
Route::delete('/avisos/destroy/{id}', [AvisoController::class,'destroy'])->name('AvisoController.destroy');

    Route::get('/avisos', function($aviso = 'avisos'){
        return view('avisos', ['avisos' => $aviso]);
    });

    Route::get('/avisos', function($data = 'data'){
        return view('avisos', ['data' => $data]);
    });


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/relatorios', [RelatorioController::class, 'index'])->name('RelatorioController.index');
Route::get('/relatorios/create', [RelatorioController::class,'create'])->name('RelatorioController.create');
Route::get('/relatorios/store', [RelatorioController::class,'store'])->name('RelatorioController.store');
Route::get('/relatorios/edit/{id}', [RelatorioController::class,'edit'])->name('RelatorioController.edit');
Route::put('/relatorios/update/{id}', [RelatorioController::class,'update'])->name('RelatorioController.update');
Route::delete('/relatorios/destroy/{id}', [RelatorioController::class,'destroy'])->name('RelatorioController.destroy');

    Route::get('/relatorios', function($relatorios = 'relatorios'){
        return view('relatorios', ['relatorios' => $relatorios]);
    });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';