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


/*
route::get('/', function () {
    return view('projects');
}); */


  Auth::routes();

//WEBSITE
Route::get('/', 'WebsiteController@index');
// Ruta hacia el Home
Route::get('/contact', 'WebsiteController@create');
// Ruta para contacto a la pagina
Route::post('/contact', 'WebsiteController@store');
// Ruta para crear el contacto desde la website


//PROYECTOS
Route::get('/projects', 'ProjectsController@index');
//Muestra TODOS los proyectos
Route::get('/project/{id}', 'ProjectsController@show');
// Muestra detalle del proyecto
///Route::get('/projects/more', 'ProjectsController@more');
// Muestra los proyectos mas populares
///Route::get('/projects/less', 'ProjectsController@less');
// Muestra los proyectos menos populares


//CARPETA JSON
// Lista el JSON de proyectos como objetos
Route::get('/projects/json', 'ProjectsController@listar');

// Lista el JSON de usuarios como objetos
Route::get('/users/json', 'UsersController@listar');


//USERS
Route::get('/user', 'UsersController@index');
	// Ruta para ver una lista de Usuarios y editar o eliminar



// LOS PATROCINADORES
    Route::group(['prefix' => 'sponsor', 'middleware' => 'auth'], function() {
    // PROFILE

    //Route::get('/user','UsersController')->name('user.index');//users

    Route::get('/profile', 'UsersController@show');
    // Ruta al perfil del usuario
    Route::post('/profile/{id}/edit', 'UsersController@edit');
	// Ruta para editar el perfil del usuario
    Route::patch('/profile/{id}', 'UsersController@update');
	// Ruta para actualizar el perfil del usuario (metodo patch)


    //DONACIONES
    Route::post('/donation/put', 'DonationsController@store');
    // Ruta para generar una nueva donacion (metodo post)
    Route::get('/donation/review', 'DonationsController@show');
    // Muestra detalle de la donacion (tus donaciones)
    Route::get('/donation/list', 'DonationsController@index');
    // lista las donaciones
    Route::patch('/donation/confirm', 'DonationsController@update');
    // Ruta para confirmar la donacion  y poder cerrar la operacion

    Route::delete('/donation/confirm', 'DonationsController@destroy');
    // Ruta para cancelar la donacion y anular la gestion

});

Route::get('user', 'UserController@index');

// LOS EMPRENDEDORES
Route::group(['prefix' => 'entrepreneur'], function() {


    // PROFILE

    //Route::get('/user','UsersController')->name('user.index');//users

    Route::get('/profile', 'UsersController@show');
    // Ruta al perfil del usuario
    Route::post('/profile/{id}/edit', 'UsersController@edit');
    // Ruta para editar el perfil del usuario
    Route::patch('/profile/{id}', 'UsersController@update');
    // Ruta para actualizar el perfil del usuario (metodo patch)

    Route::get('photo', 'PhotoController@index');
    //
    Route::get('photos/add', 'PhotoController@create');
    //


     //DEPOSITOS(ingreso de dinero de los donantes)

    Route::get('/deposits', 'DepositsController@show');
    // Muestra el detalle de los  ingresos  (tus ingresos)

    Route::patch('/deposit/confirm', 'DepositsController@update');
    // Ruta para confirmar  los ingresos

// PROJECTS

Route::get('/projects/add', 'ProjectsController@create');
	// Ruta para crear un nuevo proyecto
Route::post('/projects', 'ProjectsController@store');
// Ruta para guardar un proyecto (metodo post)
Route::get('/projects/{id}/edit', 'ProjectsController@edit');
	// Ruta para editar un proyecto
Route::patch('/projects/{id}', 'ProjectsController@update');
// Ruta para actualizar un proyecto (metodo patch)
Route::get('/projects/{id}/del', 'ProjectsController@delete');
	// Ruta para eliminar un proyecto
Route::delete('/projects/{id}', 'ProjectsController@destroy');
	// Ruta para eliminar un Proyecto (metodo delete)

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
