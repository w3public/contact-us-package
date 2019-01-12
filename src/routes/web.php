<?php
Route::group(['namespace'=>'W3public\ContactForm\Http\Controllers'],function(){
    //Contact Form
    Route::get('contact-us','ContactFormController@index');
    Route::post('contact-us','ContactFormController@store')->name('contact-us');
});

