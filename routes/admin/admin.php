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
            /* patient routes */
            Route::get('/patien/register','patienController@register')->name('patienRegister');
            Route::post('/patien/register','patienController@postRegister')->name('patien_post_Register');
            Route::get('/patien/profile/{id}','patienController@profile')->name('patien-profile')->middleware('is_patient');
            Route::get('/patien/logout','patienController@logout')->name('patien.logout');
            /* patient routes */
            /* clinic routes */
            Route::get('/clinic/register','clinicController@register')->name('clinicRegister');
            Route::post('/clinic/register','clinicController@postRegister')->name('clinic_post_Register');
            Route::get('/clinic/profile/{id}','clinicController@profile')->name('clinic.profile')->middleware('is_clinic');
            Route::get('/clinic/logout','clinicController@logout')->name('clinic.logout');
            /* clinic routes */
            /* hosptail routes */
            Route::get('/hosptail/register','hosptailController@register')->name('hosptailRegister');
            Route::post('/hosptail/register','hosptailController@postRegister')->name('hosptail_post_Register');
            Route::get('/hosptail/profile/{id}','hosptailController@profile')->name('hosptail.profile')->middleware('is_hosptail');
            Route::get('/hosptail/logout','hosptailController@logout')->name('hosptail.logout');
            /* hosptail routes */
            /* xray routes */
            Route::get('/xray/register','xrayController@register')->name('xrayRegister');
            Route::post('/xray/register','xrayController@postRegister')->name('xray_post_Register');
            Route::get('/xray/profile/{id}','xrayController@profile')->name('xray.profile')->middleware('is_xray');
            Route::get('/xray/logout','xrayController@logout')->name('xray.logout');
            /* xray routes */
            /* labs routes */
            Route::get('/labs/register','labsController@register')->name('labsRegister');
            Route::post('/labs/register','labsController@postRegister')->name('labs_post_Register');
            Route::get('/labs/profile/{id}','labsController@profile')->name('labs.profile')->middleware('is_lab');
            Route::get('/labs/logout','labsController@logout')->name('labs.logout');
            /* labs routes */
            /* pharmacy routes */
            Route::get('/pharmacy/register','pharmacyController@register')->name('pharmacyRegister');
            Route::post('/pharmacy/register','pharmacyController@postRegister')->name('pharmacy_post_Register');
            Route::get('/pharmacy/profile/{id}','pharmacyController@profile')->name('pharmacy.profile')->middleware('is_pharmacy');
            Route::get('/pharmacy/logout','pharmacyController@logout')->name('pharmacy.logout');
            /* pharmacy routes */
            /* login route */
            Route::post('/login','backEndController@login')->name('loginRoute');
        });
    });


/* admin routes */



?>
