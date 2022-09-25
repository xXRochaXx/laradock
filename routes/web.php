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
Route::get('/request', function (\Illuminate\Http\Request $request) {
    $r = $request->whenHas('keyword', function ($input) {
        dd('x', $input);
    });
   dd($r);
    return 'x';
});

Route::get('user/email/{user:email}', function (\App\Models\User $user) {
    return $user;
});

Route::get('user/{user}', [\App\Http\Controllers\UserController::class, 'show']);

Route::prefix('usuarios')->group(function() {
    Route::get('/', function () {
        return 'usuario';
    })->name('usuarios');

    Route::get('/{id}', function () {
        return 'Mostrar detalhes';
    })->name('usarios.show');

    Route::get('/{id}/tags', function (){
       return 'Tags do usuario';
    })->name('usuarios.tags');
});

Route::get('/a-empresa/{string?}', function ($string = null) {
    return $string;
})->name('a-empresa');


Route::get('/users/{id}/{id2}', function ($id, $id2) {
    return $id . ' - ' . $id2;
});
