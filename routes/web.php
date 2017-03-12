<?php


Route::get('/books', 'BookController@index');

Route::get('/books/view/{title?}', 'BookController@show');

Route::any('/practice/{n?}', 'PracticeController@index');

Route::get('/', 'WelcomeController');

if(config('app.env') == 'local') {
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}
