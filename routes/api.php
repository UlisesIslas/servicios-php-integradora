<?php
use App\Http\Controllers\ConvenioController;
use App\Http\Controllers\BancoAlimentoController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\AlimentosController;
use App\Http\Controllers\CategoriaAlimentosController;
use App\Http\Controllers\CadenaComercialController;
use App\Http\Controllers\UserController;
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
Route::resource('convenios', ConvenioController::class);
Route::resource('cadenas_comerciales', CadenaComercialController::class);
Route::resource('usuarios', UserController::class);
Route::resource('bancos_alimentos', BancoAlimentoController::class);
