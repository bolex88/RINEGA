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

Route::get('/about', 'PagesController@showAbout')->name('about.show');
Route::get('/courses', 'PagesController@Courses')->name('courses.show');
Route::get('/gallery', 'PagesController@Gallery')->name('gallery.show');
Route::get('/videos', 'PagesController@Videos')->name('videos.show');
Route::get('/photos', 'PagesController@Photos')->name('photos.show');
Route::get('/add-contact', 'PagesController@addContacts')->name('contact.add');
Route::post('/contact', 'PagesController@Contacts')->name('contact.save');
Route::get('/events', 'PagesController@Events')->name('events.show');
