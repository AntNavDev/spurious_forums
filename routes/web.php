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
Route::resource( 'subject', 'SubjectController' );

Route::get('/', 'HomepageController@index' )->name( 'homepage' );

Route::get( 'app-shell', function() {
    return view( 'app/shell' );
} )->name( 'shell' );

Route::get( 'subject/{subject}', 'SubjectController@myThreads' )->name( 'subject.myThreads' );

