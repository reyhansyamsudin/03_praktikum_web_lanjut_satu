<?php
use App\http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\AboutUs;
use App\http\Controllers\contactUs;
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
    return view('Welcome');
});

//Route::prefix('admin') group(function () {
  //  Route::get('/users', function () );
//});

Route::get('/', function () {
    return view('Welcome');
});
Route::get('/contact-us', [contactUs::class, 'index']);
Route::get('/about-us', [AboutUs::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

Route::prefix('product')->group(function () {
    Route::get('/marbel-edu-games', function () {
        $prd = "Marbel Edu Games";
        return view('product', ['product ' =>  $prd]);
    });

    Route::get('/marbel-and-friends-kids-games', function () {
        $prd = "Marbel and Friends Kids Games";
        return view('product', ['product '=>  $prd]);
    });

    Route::get('/riri-story-books', function () {
        $prd = "Riri Story Books";
        return view('product', ['product '=>  $prd]);
    });

    Route::get('/kolak-kids-songs', function () {
        $prd = "Kolak Kids Songs";
        return view('product', ['product '=>  $prd]);
    });
});
    Route::prefix('program')->group(function () {
        Route::get('/karir', function () {
            $prg = "Karir";
            return view('program', ['programs'=>$prg]);
        });

        Route::get('/magang', function () {
            $prg = "Magang";
            return view('program', ['programs'=>$prg]);
        });
    
        Route::get('/kunjungan', function () {
            $prg = "Kunjungan";
            return view('program', ['programs'=>$prg]);
        });
    });