<?php

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

//Ruta para la busqueda de recetas por palabra clave.
Route::get('recipes/keyword/{keyword}', 'recipesService@searchRecipesByKeyword');
//Ruta para la busqueda de recetas por ingredientes.
Route::get('recipes/ingredients/{strIngredients}', 'recipesService@searchRecipesByIngredients');
