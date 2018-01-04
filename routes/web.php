<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('city', 'CityController');

Route::resource('school', 'SchoolController');

Route::resource('institution', 'InstitutionController');

Route::resource('language', 'LanguageController');

Route::resource('skill', 'SkillLevelController');

