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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'TicketsController@create');
Route::get('/tickets', 'TicketsController@index');
Route::get('/ticket/{slug?}', 'TicketsController@show');
Route::get('/ticket/{slug?}/edit','TicketsController@edit');
Route::post('/ticket/{slug?}/delete','TicketsController@destroy');


//Post Method Route
Route::post('/contact', 'TicketsController@store');
Route::post('/ticket/{slug?}/edit','TicketsController@update');
Route::post('/comment', 'CommentsController@newComment');



//Send Mail Route
Route::get('sendemail', function () {

    $data = array(
        'name' => "Learning Laravel",
    );

    Mail::send('emails.welcome', $data, function ($message) {

        $message->from('info@mah3uz.com', 'Learning Laravel');

        $message->to('jacosshaikh@gmail.com')->subject('Learning Laravel test email');

    });

    return "Your email has been sent successfully";

});