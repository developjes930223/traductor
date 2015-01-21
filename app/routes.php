<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    return View::make('publico/home');
});

// Nos mostrará el formulario de login.
Route::get('login', 'AuthController@showLogin');
// Validamos los datos de inicio de sesión.
Route::post('login', 'AuthController@postLogin');
/**errores*/
Route::get('errors',function(){
    return "error";
});

/******************************************************************************/
/**rutas del publico***********************************************************/

/**************************************************************************/
Route::get('errors',function(){
            return "acaaa";
        });
// Nos indica que las rutas que están dentro de él sólo serán mostradas si antes el usuario se ha autenticado.
Route::group(array('before' => 'auth'), function()
{
    /**track***/
    $facUsersTrack = new facUsersTrack();
    if(!
    $facUsersTrack->setInsertUsersTrack((object)array(
        'url_track'=>"acaaa",
        'ip_address'=>"ottaaa"
    ))){
        App::make('ErrorsController')->index();
        Route::get('errors',function(){
            return "acaaa";
        });
    }else{
    
    
    // Esta será nuestra ruta de bienvenida.
    Route::get('root/home',"root\HomeController@index");
    // Esta será nuestra ruta de bienvenida.
    Route::get('admin/home',"admin\HomeController@index");
    // Esta será nuestra ruta de bienvenida.
    Route::get('traductor/home',"traductor\HomeController@index");
    // Esta será nuestra ruta de bienvenida.
    Route::get('cliente/home',"cliente\HomeController@index");
    
    // Esta ruta nos servirá para cerrar sesión.
    Route::get('logout', 'AuthController@logOut');
    }
    
    /**************************************************************************/
    /**rutas del root**********************************************************/
    
    /**************************************************************************/
    
    /***************************************************************************/
    /**rutas del admin**********************************************************/
    
    /**************************************************************************/
    
    /**************************************************************************/
    /**rutas del cliente********************************************************/
    
    /**************************************************************************/
    
    /***************************************************************************/
    /**rutas del traductor******************************************************/
    
    /**************************************************************************/
    Route::get('errors',function(){
            return "acaaa";
        });
    
});