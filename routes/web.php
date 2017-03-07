<?php


Route::get('/books', 'BookController@index');

Route::get('/books/view/{title?}', 'BookController@view');

Route::get('/', 'WelcomeController');
