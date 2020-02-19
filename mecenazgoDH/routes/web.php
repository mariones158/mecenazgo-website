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
Route::get('/projects/json', 'ProjectsController@listar');

// Lista el JSON de usuarios como objetos
Route::get('/users/json', 'UsersController@listar');







// LOS PATROCINADORES
    Route::group(['prefix' => 'sponsor', 'middleware' => 'auth'], function() {
    // PROFILE
    Route::get('/profile', 'UsersController@show');
    // Ruta al perfil del usuario
    Route::post('/profile/{id}/edit', 'UsersController@edit');
	// Ruta para editar el perfil del usuario
    Route::patch('/profile/{id}', 'UsersController@update');
	// Ruta para actualizar el perfil del usuario (metodo patch)


    //DEPOSITOS(ingreso de dinero de los donantes)


    Route::get('/deposits', 'DepositsController@show');
    // Muestra TODOS los depositos de dinero a mi cuenta  (tus ingresos)

    Route::patch('/deposit/confirm', 'DepositsController@update');
    // Ruta para confirmar ingreso de dinero del aportante


//TUVISTE EL INGRSO DE TAL USUARIO

//DONACIONES
    Route::get('/donation', 'DonationsController@index');
    // Muestra TODOS las donaciones realizadas (tus donaciones)

    Route::post('/donation', 'DonationsController@store');
    // Ruta para generar una nueva donacion (metodo post)

    Route::get('/donation/{id}', 'DonationsController@show');
    // Muestra la donacion de un proyecto

    Route::patch('/donation/review', 'DonationsController@edit');
    // Ruta es para editar la donacion final se utiliza el (metodo patch)

    Route::get('/donation/review', 'DonationsController@show');
    // Ruta es para  poder ver la donacion final y poder confirmar o cancelar la donacion

    Route::patch('/donation/confirm', 'DonationsController@update');
    // Ruta para confirmar la donacion  y poder cerrar la operacion

    Route::delete('/donation/confirm', 'DonationsController@destroy');
        // Ruta para cancelar la donacion y anular la gestion

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
