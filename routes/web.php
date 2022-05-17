<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//ruta paises 
Route::get('paises', function () {
    $paises=[
        "Colombia"=>[
            "capital"=>"Bogota",
            "moneda"=>"peso",
            "poblacion"=>51.6,
            "ciudades"=>[
                "Medellin",
                "cali",
                "Barranquilla"
            ]
        ],
        "Peru"=>[
            "capital"=>"Lima",
            "moneda"=>"Sol",
            "poblacion"=>32.97,
            "ciudades"=>[
                "Lima",
                "Cusco",
                "Arequipa"
            ]
        ],
        "Paraguay"=>[
            "capital"=>"Asuncion",
            "moneda"=>"Guaraní paraguayo",
            "poblacion"=>7.137,
            "ciudades"=>[
                "Ciudad del este",
                "Encarnacion",
                "Paraguarí"
            ]
        ]
    ];

    //mostrar vista de paises 
    return view('paises')->with("paises", $paises);

});

Route::get('prueba', function(){
    return view('productos.new');
});
//rutas REST
//producto
Route::resource('producto', ProductoController::class);