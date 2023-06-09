<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ContactoController;
use App\Models\Product;

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
    return redirect('home');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/nosotros', function () {
    return view('pages.nosotros');
});

Route::get('/ninios', function () {
    return view('pages.ninios');
});

Route::get('/ninias', function () {
    return view('pages.ninias');
});

Route::get('/damas', function () {
    return view('pages.damas');
});

Route::get('/caballeros', function () {
    return view('pages.caballeros');
});

Route::get('/detalle', function () {
    return view('pages.detalle');
});

Route::get('/catalogo', function () {
    return view('pages.catalogo');
})->name('client.catalog');

// Route::get('/catalogo/detalle/{identif}', function ($identif) {
//     Product::findOrFail($identif);
//     return view('pages.catalogo-detalle', compact('identif'));
// })->name('client.productDetail');

Route::get('/catalogo-detalle', function () {
    return view('pages.catalogo-detalle');
})->name('client.productDetail');

Route::get('/novedades', function () {
    return view('pages.novedades');
})->name('client.novedades');

Route::get('/novedades-detalle', function () {
    return view('pages.novedades-detalle');
})->name('client.novedades-detalle');

Route::get('/registro', function () {
    return view('pages.registro');
})->name('client.registro');

Route::get('/registro-validacion', function () {
    return view('pages.registro-validacion');
})->name('client.registro-validacion');

Route::get('/cuenta-creada', function () {
    return view('pages.cuenta-creada');
})->name('client.cuenta-creada');

Route::get('/recuperar-contrasenia-3', function () {
    return view('pages.recuperar-contrasenia-3');
})->name('client.recuperar-contrasenia-3');

Route::get('/recuperar-contrasenia-4', function () {
    return view('pages.recuperar-contrasenia-4');
})->name('client.recuperar-contrasenia-4');

Route::get('/perfil-usuario', function () {
    return view('pages.perfil-usuario');
})->name('client.perfil-usuario');

Route::get('/mis-pedidos', function () {
    return view('pages.mis-pedidos');
})->name('client.mis-pedidos');

Route::get('/pedidos-detalle', function () {
    return view('pages.pedidos-detalle');
})->name('client.pedidos-detalle');

Route::get('/terminos-condiciones', function () {
    return view('pages.terminos-condiciones');
})->name('client.terminos-condiciones');

Route::get('/preguntas-frecuentes', function () {
    return view('pages.preguntas-frecuentes');
})->name('client.preguntas-frecuentes');

Route::get('/libro-reclamaciones', function () {
    return view('pages.libro-reclamaciones');
})->name('client.libro-reclamaciones');

Route::get('/carrito', function () {
    return view('pages.carrito');
})->name('client.carrito');

Route::get('/proceso-compra-1', function () {
    return view('pages.proceso-compra-1');
})->name('client.proceso-compra-1');

Route::get('/proceso-compra-2', function () {
    return view('pages.proceso-compra-2');
})->name('client.proceso-compra-2');

Route::get('/proceso-compra-3', function () {
    return view('pages.proceso-compra-3');
})->name('client.proceso-compra-3');

Route::get('/proceso-compra-4', function () {
    return view('pages.proceso-compra-4');
})->name('client.proceso-compra-4');

Route::get('/contactenos', function () {
    return view('pages.contactenos');
})->name('contacto.form');

Route::post('sendForm', [ContactoController::class, 'sendForm'])->name('contacto.sendForm');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// RUTAS ADMIN
Route::get('admin/dashboard', function () {
    return view('admin.index');
})->middleware(['auth:sanctum', 'verified', 'verify.is.admin'])->name('dashboard');

Route::middleware('auth:sanctum', 'verify.is.admin')->prefix('admin')->group(function () {

    Route::get('categorias', function(){
        return view('admin.categories');
    })->name('admin.categories');
    
    Route::get('subcategorias', function(){
        return view('admin.subcategories');
    })->name('admin.subcategories');

    Route::get('resetPassword', function(){
        return view('admin.resetPassword');
    })->name('admin.reset');

    Route::post('resetPassword', [AdminController::class, 'update'])->name('admin.resetPassword');
    Route::resource('product', ProductController::class)->names('products');
});

//Idioma
// Route::get('/lang/{lang}', function($lang){
//     App::setLocale($lang);
//     session()->put('locale', $lang);
//     return redirect()->back();
// });

//CREAR LINK STORAGE
/*Route::get('/linkStorage', function () {
    Artisan::call('storage:link');
});*/