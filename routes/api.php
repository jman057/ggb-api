<?php

use App\Models\Category;


Route::get('/', function () {
    $categories = Category::parents()->ordered()->get();

    dd($categories);
});




// Route::get('/', function () {
//     return 'hello';
// });

//starting from scratch!!


// use Illuminate\Http\Request;

// /*
// |--------------------------------------------------------------------------
// | API Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register API routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | is assigned the "api" middleware group. Enjoy building your API!
// |
// */

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
