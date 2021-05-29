<?php

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

Route::view('/', 'welcome');

use App\Http\Controllers\ArticleController;
Route::get('/article/{category?}/{subcategory?}/{article?}', ArticleController::class);

Route::fallback(function () {
    $data['article_title'] = 'Not Found';
    return view('404', $data);
});
