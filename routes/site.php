<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Site Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group([
    'namespace' => 'Front'
], function () {


    ################################### Start Home ##################################
    Route::get('/', 'FrontController@home')->name('site.home');
    ################################### End Home ##################################



    ################################### Start t-support ##################################
    Route::get('/t-support/{id}', 'FrontController@productShow')->name('site.product');
    ################################### End t-support ##################################


    ################################### Start system ##################################
    Route::get('/system/{id}', 'FrontController@offerShow')->name('site.offer');
    ################################### End system ##################################



    ################################### Start verify-id ##################################
    Route::get('/verify-id', 'FrontController@certifications')->name('site.certifications');
    ################################### End verify-id ##################################



    ################################### Start about-us ##################################
    Route::get('/about-us', 'FrontController@warranty')->name('site.warranty');
    ################################### End about-us ##################################


//
//    ################################### Start gallery ##################################
//    Route::get('/gallery', 'FrontController@gallery')->name('site.gallery');
//    ################################### End gallery ##################################

    ################################### Start instructors ##################################
    Route::get('/instructors', 'FrontController@catalogs')->name('site.catalogs');
    ################################### End instructors ##################################

    ################################### Start Show Instructor ##################################
    Route::get('/instructors/{id}', 'FrontController@instructorShow')->name('site.instructorShow');
    ################################### End Show Instructor ##################################


    ################################### Start copy-right ##################################
    Route::get('/copy-right', 'FrontController@copyRight')->name('site.copyRight');
    ################################### End copy-right ##################################

    ################################### Start contacts ##################################
    Route::get('/contacts', 'FrontController@contacts')->name('site.contacts');
    Route::post('/contacts-post', 'FrontController@contactsPost')->name('site.contacts.post');
    ################################### End contacts ##################################

});

Auth::routes();


