<?php
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\AlimentosController;
use App\Http\Controllers\CategoriaAlimentosController;
use App\Http\Controllers\CadenaComercialController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('municipios', MunicipioController::class);
Route::resource('alimentos', AlimentosController::class);
Route::resource('categoriaAlimentos', CategoriaAlimentosController::class);
Route::resource('cadenas_comerciales', CadenaComercialController::class);
