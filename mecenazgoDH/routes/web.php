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


//WEBSITE
Route::get('/', 'WebsiteController@index');
// Ruta hacia el Home
Route::get('/contact', 'WebsiteController@create');
// Ruta para contacto a la pagina
Route::post('/contact', 'WebsiteController@store');
// Ruta para crear el contacto desde la website


//PROYECTOS
Route::get('/projects', 'ProjectController@index');
//Muestra TODOS los proyectos
Route::get('/project/{id}', 'ProjectsController@show');
// Muestra detalle del proyecto
Route::get('/projects/more', 'ProjectsController@more');
// Muestra los proyectos mas populares
Route::get('/projects/less', 'ProjectsController@less');
// Muestra los proyectos menos populares


//CARPETA JSON
// Lista el JSON de proyectos como objetos
Route::get('/products/json', 'ProductsController@listar');

// Lista el JSON de usuarios como objetos
Route::get('/users/json', 'UsersController@listar');



//Route::get('/deposit/payment', 'PaymentCardsController@create');
// Ruta para mostrar el formulario de carga de Tarjeta
//Route::patch('/deposit/payment/{id}', 'PaymentCardsController@create_select');
// Ruta anexa a Payment para elegir un medio de pago (metodo patch)
//Route::post('/deposit/payment', 'PaymentCardsController@store');
// Ruta para guardar el registro de una tarjeta lo hacemos con (metodo post)



// LOS PATROCINADORES
    Route::group(['prefix' => 'sponsor', 'middleware' => 'auth'], function() {
    // PROFILE
    Route::get('/profile', 'UsersController@show');
    // Ruta al perfil del usuario
    Route::post('/profile/{id}/edit', 'UsersController@edit');
	// Ruta para editar el perfil del usuario
    Route::patch('/profile/{id}', 'UsersController@update');
	// Ruta para actualizar el perfil del usuario (metodo patch)


    //DEPOSITOS
    Route::post('/deposit', 'DepositsController@store');
    // Ruta para generar una nuevo deposito (metodo post)
    Route::get('/deposit/review', 'DepositsController@show');
    // Ruta es para  poder ver el deposito final y poder confirmar o cancelar el deposito
    Route::patch('/deposit/review', 'DepositsController@edit');
        // Ruta es para editar el deposito final se utiliza el (metodo patch)
    Route::patch('/deposit/confirm', 'DepositsController@update');
        // Ruta para confirmar el deposito y poder cerrar la operacion
    Route::delete('/deposit/confirm', 'DepositsController@destroy');
        // Ruta para cancelar el deposito y cancelar la operacion

    //DONACIONES
    Route::get('/donation', 'DonationsController@index');
    // Muestra TODOS las donaciones de TODOS las proyectos
    Route::get('/donation/{id}', 'DonationsController@show');
    // Muestra la donacion de un proyecto
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

