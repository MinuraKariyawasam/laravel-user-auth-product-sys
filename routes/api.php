<?php
use App\Models\Product;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// public routes

Route::get('/products',  [ProductController::class, 'index']);



// protected routes
Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::post('/products', [ProductController::class, 'store']);
});


// Route::get('/products',  [ProductController::class, 'index']);

// Route::post('/products', [ProductController::class, 'store']);


// using crud rotues 

// Route::resource('products', ProductController::class);



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});