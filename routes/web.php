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
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/courses', function () {
    return view('courses');
});

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/contact', 'User\ContactController@index')->name('contact.index');
Route::post('/contact', 'User\ContactController@store')->name('contact.store');
Route::get('/gallery', 'User\GalleryController@index')->name('gallery.index');


Route::get('/affiliations', function () {
    return view('affiliations');
});

Route::get('/notice', function () {
    return view('notice');
});

Route::get('/doctors-chamber', function () {
    return view('doctorsChamber');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->group(function() {

	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin');
	Route::resource('contact', 'Admin\ContactController');
	Route::resource('gallery', 'Admin\GalleryController');
    Route::get('gallery/delete/{id}', array('as' => 'admin.gallery.delete', 'uses' => 'Admin\GalleryController@delete'));


});