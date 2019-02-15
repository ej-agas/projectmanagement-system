<?php

Route::group(
    ['middleware' => []], function () {
        Route::get('/', 'TaskController@show');
        Route::put('/status', 'TaskController@updateStatus');
        Route::put('/', 'TaskController@update');
        Route::delete('/', 'TaskController@destroy');
    }
);
