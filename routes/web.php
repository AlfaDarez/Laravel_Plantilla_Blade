<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('plantilla.principal');
});

Route::get('/nosotros', function(){
    return 'Hola Estas En la pagina de Nosotros';
});


Route::get('/acercade',function(){
    return 'pagina acerca de';
});

Route::get('Hola/{nombre}', function ($nombre) {
    return 'Hola '.$nombre;
});

Route::get('Imagen/{tipo_informacion}', function ($tipo_informacion) {
    return 'Imagen de...'.$tipo_informacion;
});


