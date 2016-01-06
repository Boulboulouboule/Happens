<?php

Route::get('/', 'HomeController@index');

Route::get('events', 'EventsController@index');

Route::get('persons', 'PersonsController@index');

Route::get('/test', function()
{
    return Twitter::getUserTimeline(['screen_name' => 'catnatnet', 'count' => 100, 'format' => 'json']);
});
Route::resource('events', 'EventSController');
