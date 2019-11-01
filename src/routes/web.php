<?php

Route::namespace('IstvanMolitor\LaravelContact\Http\Controllers')->middleware('web')->group(function () {

    Route::get('contact', 'ContactController@index')->name('contact.index');
    Route::post('contact/send', 'ContactController@send')->name('contact.send');
    Route::get('contact/sent', 'ContactController@sent')->name('contact.sent');

});