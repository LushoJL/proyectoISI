<?php

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
})->middleware('guest');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});




Route::get('/prueba', function (){
    return view('profile.show');

});
Route::group(['middleware' => 'auth'], function () {
    Route::get('lista-roles',function (){
        return view('roles.index');
    })->name('role');
    Route::get('lista-usuarios','UserController@lista')->name('listaU');
    Route::get('lista-roles','RoleController@lista')->name('listaR');
    Route::get('lista-productos','ProductController@lista')->name('listaP');
    Route::get('lista-proveedor','ProviderController@lista')->name('listaPR');
    Route::get('lista-compras','PurchaseController@lista')->name('listaCOM');
    Route::get('Ventas','SaleController@lista')->name('listaVen');

	Route::resource('user', 'UserController');
    Route::resource('brand', 'BrandController');
    Route::resource('category', 'CategoryController');
    Route::resource('product', 'ProductController');
    Route::resource('provider', 'ProviderController');
    Route::resource('purchase','PurchaseController');
    Route::resource('expiration','ExpirationController');
	Route::put('photo/{user}','UserController@photo')->name('user.photo');
    Route::resource('role', 'RoleController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::get('profile/miperfil', 'ProfileController@show')->name('profile.show');
    Route::get('stock','ProductController@stock');
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
	Route::get('/pruebas','EspicialController@userRole')->name('user_role');
});

