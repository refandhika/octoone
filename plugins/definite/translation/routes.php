<?php

Route::post('/set-lang/{lang}', [
    'middleware' => ['web'],
    'uses' => function ($lang) {
        Session::put('lang', $lang);

        return Session::all();
    },
]);
