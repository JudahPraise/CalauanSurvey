<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');

Route::prefix('/survey')->group(function(){

    Route::get('/', 'Survey\DashboardControler@index')->name('survey.dashboard');

    //Barangay
    Route::get('/barangays', 'Survey\BarangayController@index')->name('barangay.index');
    Route::get('/barangays/{id}', 'Survey\BarangayController@showBarangay')->name('barangay.barangay');

    //Forms
    Route::prefix('/forms')->group(function(){

        Route::get('/', 'Survey\Forms\FormController@index')->name('forms.index');

        Route::prefix('/family-information')->group(function(){
            
            Route::get('/', 'Survey\Forms\FamilyInformation@index')->name('form.family-info');

        });

        Route::prefix('/family-members')->group(function(){
            
            Route::get('/', 'Survey\Forms\FamilyMembers@index')->name('form.family-members');

        });

        Route::prefix('/health-information')->group(function(){
            
            Route::get('/', 'Survey\Forms\HealthInformation@index')->name('form.health-info');

        });

        Route::prefix('/environment-sanitation')->group(function(){
            
            Route::get('/', 'Survey\Forms\EnvironmentSanitation@index')->name('form.environment-sanitation');

        });


        
    });

});
