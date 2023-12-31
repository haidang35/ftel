<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('install/pre-installation', 'InstallController@preInstallation')->name('install.pre_installation');
Route::get('install/configuration', 'InstallController@getConfiguration')->name('install.configuration.show');
Route::post('install/configuration', 'InstallController@postConfiguration')->name('install.configuration.post');
Route::get('install/complete', 'InstallController@complete')->name('install.complete');

Route::get('license', 'LicenseController@create')->name('license.create');
Route::post('license', 'LicenseController@store')->name('license.store');

Route::get('/reset-theme/{theme}',function($theme){
    $settings = DB::table('settings')->where('key','LIKE', $theme.'_%' )->delete();
    $translations = DB::table('translations')->where('key','LIKE',$theme.'::%')->delete();
});
