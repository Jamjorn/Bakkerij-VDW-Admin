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
Route::post('/productedit/verifyUpdate/{id}', 'ProductController@addUpdate');
Route::get('/delete/{id}', 'ProductController@delete');
Route::get('verify/delete/{id}', 'ProductController@delete');
Route::get('productToevoegen', 'lastAdded@returnLastAdded');

Route::get('contact', 'ContactController@showForm');
Route::post('contact', 'ContactController@handleFormPost');


/*----------------------------------------------------------------*/

Route::get('create', function () {
    return view('productCRUD');
});

Route::get('CRUDcreate', function () {
    return view('CRUDcreate');
});
Route::get('createBestelling', function () {
    return view('createBestelling');
});
Route::get('bestellingen', function () {
    return view('bestellingen');
});
Route::get('klant', function () {
    return view('klant');
});
Route::get('createKlant', function () {
    return view('createKlant');
});
Route::get('printpreviewBig', function () {
    return view('printpreviewBig');
});

Route::get('productCRUD/create', function () {
    return view('productCRUD');
});

Route::get('ShopRoute', function () {
    return view('ShopRoute');
});
Route::get('bakkerijOverzicht', function () {
    return view('bakkerijOverzicht');
});

Route::get('/productCRUD/{id}/edit', 'productCRUDcontroller@edit');
Route::post('/updateCRUD/{id}', 'productCRUDcontroller@addUpdate');
Route::get('/deleteCrud/{id}', 'productCRUDcontroller@deleteCrud');

Route::get('/bestellingen/{id}/edit', 'bestellingenController@bestellingEdit');
Route::post('/updateBestelling/{id}', 'bestellingenController@bestellingAddUpdate');
Route::get('/deleteBestelling/{id}', 'bestellingenController@deleteBestelling');

Route::get('/klant/{id}/edit', 'klantController@klantEdit');
Route::post('updateKlant/{id}', 'klantController@klantAddUpdate');
Route::get('/deleteKlant/{id}', 'klantController@deleteKlant');

Route::get('showKlant/deleteKlant/{id}', 'klantController@deleteKlantInduv');
Route::get('showKlant/{id}', 'klantController@showKlant');

Route::post('showKlant/date/{$id}', 'klantController@showKlantDate');
Route::get('showKlant/date/{$id}', 'klantController@showKlantDate');


Route::resource('productCRUD','productCRUDcontroller');
Route::resource('bestellingen', 'bestellingenController');
Route::resource('klant', 'klantController');
Route::resource('ShopRoute', 'RouteController');
Route::post('bakkerijOverzicht', 'BakkerijOverzichtController@getDates');
Route::post('ShopRoute', 'RouteController@populate');
Route::post('showRouteDetails', 'RouteController@showRouteDetails');

Route::post('create', 'productCRUDcontroller@create');
Route::post('createBestelling', 'bestellingenController@createBestelling');
Route::post('createKlant', 'klantController@createKlant');


Route::post('date/{id}', 'klantController@showDates');
Route::get('date/{id}', 'klantController@showDates');
Route::post('/bakkerijOverzicht', 'BakkerijOverzichtController@getDates');



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