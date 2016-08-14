<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('webshop', 'WebshopController@initializeWebshop');
Route::get('/setpaths', 'WebshopController@setPaths');

Route::get('openingstijden', function () {
    return view('openingstijden');
});
Route::get('over-ons', function () {
    return view('over_ons');
});
Route::get('nieuws', function () {
    return view('nieuws');
});
Route::get('single-item', function () {
    return view('single_item');
});
Route::get('eerder-gekocht', function () {
    return view('eerder_gekocht');
});
Route::get('inloggen', function () {
    return view('inloggen');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('fotoboek', function () {
    return view('fotoboek');
});
Route::get('brood', function () {
    return view('brood');
});
Route::get('uitleg', function () {
    return view('uitleg');
});
Route::get('tips', function () {
    return view('tips');
});
Route::get('recentNieuws', function () {
    return view('recentNieuws');
});
Route::get('dashboard', function () {
    return view('dashboard');
});
Route::get('productview', function () {
    return view('productview');
});
Route::get('media', function () {
});
Route::get('edit', function () {
    return view('edit');
});

Route::get('productAanpassen', function () {
    return view('productAanpassen');
});
Route::get('productToevoegen', function () {
    return view('productToevoegen');
});
Route::get('productview', 'productviewcontroller@overview');
Route::get('productedit/{id}', 'productviewcontroller@edit');


Route::post('verify', 'ProductController@add');
Route::get('productToevoegen', 'lastAdded@returnLastAdded');

Route::get('contact', 'ContactController@showForm');
Route::post('contact', 'ContactController@handleFormPost');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::any('{catchall}', function() {
  return View::make('fotoboek');
})->where('catchall', '.*');