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
///////index
Route::get('/', function () {
    return view('welcome');
});
//////login
Route::get('/login', function () {
    return view('welcome');
})->name('login');

Route::get('/register',function(){
    return view('regiter');
})->name('register');



//********rutas para login     */
Route::post('/register','LoginController@register')->name('registrar');
//iniciar secion 
Route::post('/iniciarSesion','LoginController@iniciar')->name('iniciar'); 

// **************************rutas protegidas/******************* */
Route::group(['middleware' => 'auth'], function () {
    //´pagina principal del administrador
    Route::get('/admin','LoginController@index')->name('admin');
    //////////////////        Rutas de los articulos //////////////////////// 
    Route::get('/articulos','ArticuloController@articulos')->name('articulos');
    Route::post('/articulo/save','ArticuloController@guardar')->name('articulo.save');

    /////////////////         Rutas de la categoria ////////////////////////
    Route::get('/categorias','CategoriaController@index')->name('categorias');
    Route::post('guardar/categorias','CategoriaController@save')->name('guardar.categorias');
    Route::post('buscar/categorias','CategoriaController@buscar')->name('buscar.categoria');
    Route::get('categoria/{id}','CategoriaController@buscarCategoria')->name('bucarcategoria');
    Route::post('categoria/update','CategoriaController@update')->name('categoria.update');
    Route::post('categoria/delete','CategoriaController@delete')->name('categoria.delete');
    Route::get('/pdf/categoria','CategoriaController@invoice')->name('reporte');
    
});
