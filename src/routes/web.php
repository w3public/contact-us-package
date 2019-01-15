<?php
Route::group(['namespace'=>'W3public\ContactForm\Http\Controllers','middleware' => 'web'],function(){
    Route::get('contact-us','ContactFormController@index');
    Route::post('contact-us','ContactFormController@store')->name('contact-us');
});
