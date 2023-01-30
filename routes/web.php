<?php

use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;

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

Route::get('/', [BlogController::class, 'showAll']);


// Route::get('/welcome',function (){

//     return response('<h1>That is  html text</h1>',200)
//     -> header('Content-type','text/html') ;
// });


Route::get('/blogs/{id?}', [BlogController::class, 'findById'])->where('id', '[0-9]+');

// function ($id){
//     return View('blog',[
//         "data" => Blogs::find($id)
//     ]) ;
// }


Route::get('/testreq', function (Request $request) {
    dd($request);
});


Route::get('/admin', [BlogController::class, 'admin'])->middleware('auth');
Route::post('/admin', [BlogController::class, 'creatNewBlog'])->middleware('auth');
Route::get('/admin/blogs/{blog}/edit', [BlogController::class, 'editBlog'])->middleware('auth');
Route::put('/admin/{blogs}', [BlogController::class, 'updateBlog'])->middleware('auth');

Route::match(array('GET', 'DELETE'), '/admin/blogs/{blog}/delete', [BlogController::class, 'deleteBlog'])->middleware('auth');



Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/signin', [UserController::class, 'signin'])->middleware('guest');

Route::post('/users', [UserController::class, 'registerNewUser']);
Route::post('/login/admin', [UserController::class, 'loginToAdmin']);

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

