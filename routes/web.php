<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// メールアドレス確認メールを送信
Route::post('/email', 'ChangeEmailController@sendChangeEmailLink');

// 新規メールアドレスに更新
Route::get("reset/{token}", "ChangeEmailController@reset");
