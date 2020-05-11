<?php
/* admin routes */
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        Route::group(['prefix'=>'dashbord','middleware' => 'web'],function(){
            Route::get('/index','backEndController@index')->name('indexRoute');
            Route::get('/indexRegister','backEndController@indexRegister')->name('indexRegister');
            Route::get('/patien/register','patienController@register')->name('patienRegister');
            Route::post('/patien/register','patienController@postRegister')->name('patien_post_Register');
            Route::get('/patien/profile/{id}','patienController@profile')->name('patien-profile');
        });
    });


/* admin routes */



?>
