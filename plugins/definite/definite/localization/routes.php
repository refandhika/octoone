<?php

Route::post('/lang', ['middleware' => ['web'], 'uses' => function () {
    $lang = Request::input('lang', 'id');

    Session::put('lang', $lang);

    return compact('lang');
}]);
