<?php

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





Route::get('/v2/posts',function( ){
    $data = [
        [
            "id" => 1,
            "name" => "oussama",
            "age" => 18,
        ],
        [
            "id" => 2,
            "name" => "ahmed",
            "age" => 25,
        ]
    ];
    return response()->json($data) ;
});




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
