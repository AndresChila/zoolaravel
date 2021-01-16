<?php

use App\Animal;
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


/*Route::get('animals', 'AnimalController@index');
Route::get('animals/{animals}', 'AnimalController@show');
Route::post('animals', 'AnimalController@store');
Route::put('animals/{animals}', 'AnimalController@update');
Route::delete('animals/{animals}', 'AnimalController@delete');
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('animals', function(){
    return Animal::all();
});

Route::get('animals/{id}', function($id){
    return Animal::find($id);
});

Route::post('animals', 'AnimalController@store');

Route::put('animals/{id}', function(Request $request, $id) {
    $animal = Animal::findOrFail($id);
    $animal->update($request->all());

    return $animal;
});

Route::delete('animals/{id}', function($id) {
    Animal::find($id)->delete();
    return 204;
});


