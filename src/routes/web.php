<?php
/**
 * Created by PhpStorm.
 * User: Bablu
 * Date: 12/31/2018
 * Time: 2:27 PM
 */

Route::group(['namespace'=>'W3public\Calculator\Http\Controllers'],function(){
    Route::get('calculator','CalculatorController@index');
    Route::get('add/{a}/{b}','CalculatorController@add');
    Route::get('sub/{a}/{b}','CalculatorController@subtract');

    //Contact Form
    Route::get('contact_form','CalculatorController@contact_form');
    Route::post('contact_form','CalculatorController@contact_form_store')->name('contact_form');
});

