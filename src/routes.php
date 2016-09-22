<?php

Route::get('timezones/{timezone?}', 'rulyanggriawan\timezones\TimezonesController@index');

//Route::get('timezones/{timezone}', function($timezone){
//    var_dump("timezones");
//    var_dump($timezone);
//});

