<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EjemploController;
use App\Http\Controllers\EstudianteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// estos se usasn para la limitar a los usuarios
// definicion de ruta 
// se define la ruta por medio del metodo GET 

// dar la bienvenida
Route::get('/', function () {
    //return view('welcome');
    return "Vista de bienvenida";
});

Route::get('/usuario',[EjemploController::class,'index']);
Route::get('/usuario/create',[EjemploController::class,'create']);
Route::get('/usuarios/{id}/{nombre?}',[EjemploController::class,'show']);
Route::resource('estudiantes', EstudianteController::class);

// // recibir 
// // funciones

// // estos son  los usuarios
// Route::get('/usuarios', function () {
//     return "Hola estos son los usuarios";
// }); 


// // se crea los usuarios
// Route::get('/usuarios/create', function () {
//     return "Hola estos son los usuarios para crear";
// }); 

// // si reconoce el usuario :
// //Esta URL proporcionaría tanto el ID como el nombre del usuario y devolvería un saludo que incluye ambos valores encaso contratio 
// //Esta URL proporcionaría solo el ID del usuario y devolvería un saludo que incluye el ID.
 
// Route::get('/usuarios/{id}/{nombre?}', function ($idusuario, $nombreusuario=null) {
//     if($nombreusuario){
//         return "Reconoce el usuario " ."Hola usuario " .$nombreusuario ." tu id es " .$idusuario;
//     }
//     else{
//         return "Hola tu id es: " .$idusuario;
//     }
// });



