<?php

use App\Models\Article;
use App\Models\MainCategory;
use Illuminate\Support\Facades\Route;
use Astrotomic\Translatable\Translatable;

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


// Route::get('/admin', function () {
//     return view('dashboard.home');
// });

Route::get('/site', function () {
    return view('front.home');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('create', function() {
    $cat = new MainCategory();
    $cat->online = true;
    $cat->save();
    foreach (['en', 'nl', 'fr', 'de'] as $locale) {
        $cat->translateOrNew($locale)->name = "Title {$locale}";

    }
    $cat->save();
    echo 'Created an category with some translations!';
});
