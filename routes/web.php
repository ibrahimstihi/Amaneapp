<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PsyController;
use App\Http\Controllers\AdminController;
Route::get('/', function () {
    return view('welcome');
});


//psychologe routes 

Route::get('users', '\App\Http\Controllers\PsyController@index')->name('users.index');

Route::get('psychologe/psy-matching-step-one', '\App\Http\Controllers\PsyController@matchingStepOne')
->name('psychologe.matching.step.one');
Route::post('psychologe/psy-matching-step-one', '\App\Http\Controllers\PsyController@postMatchingStepOne')
->name('psychologe.matching.step.one.post');
  
Route::get('psychologe/psy-matching-step-two', '\App\Http\Controllers\PsyController@matchingStepTwo')
->name('psychologe.matching.step.two');
Route::post('psychologe/psy-matching-step-two', '\App\Http\Controllers\PsyController@postMatchingStepTwo')
->name('psychologe.matching.step.two.post');

Route::get('psychologe/psy-matching-step-three', '\App\Http\Controllers\PsyController@matchingStepThree')
->name('psychologe.matching.step.three');
Route::post('psychologe/psy-matching-step-three', '\App\Http\Controllers\PsyController@postMatchingStepThree')
->name('psychologe.matching.step.three.post');

Route::get('psychologe/psy-matching-step-fore', '\App\Http\Controllers\PsyController@matchingStepFore')
->name('psychologe.matching.step.fore');
Route::post('psychologe/psy-matching-step-fore', '\App\Http\Controllers\PsyController@postMatchingStepFore')
->name('psychologe.matching.step.fore.post');

//end

//Log in
Route::get('login','\App\Http\Controllers\auth\AuthController@login')->name('login');
Route::post('post-login', '\App\Http\Controllers\auth\AuthController@postLogin')->name('login.post'); 

Route::get('dashboard', '\App\Http\Controllers\auth\AuthController@dashboard')->name('dashboard'); 

//logout
Route::get('logout', '\App\Http\Controllers\auth\AuthController@logout')->name('logout');

//Admin dashboard routes
Route::group(['prefix'=>'dashboard'],function(){
    //acount validation route
    Route::put('/valide/{id}','\App\Http\Controllers\AdminController@valide')->name('account.valide');
    //destroy acount route
    Route::delete('/destroy/{id}','\App\Http\Controllers\AdminController@destroy')->name('account.destroy');
    Route::get('/show/{id}','\App\Http\Controllers\AdminController@psy_show')->name('psy.show');
    Route::get('/partien_show/{id}','\App\Http\Controllers\AdminController@partien_show')->name('partien.show');
    // Route::get('/home','App\Http\Controllers\auth\Auth@dashboard')->name('dashboard');
    Route::get('/psychologe accounts','App\Http\Controllers\AdminController@psy_account')->name('psy_account');
    Route::get('/partien accounts','App\Http\Controllers\AdminController@partien_account')->name('partien_account');
    Route::get('/matching','App\Http\Controllers\AdminController@matching')->name('matching');
    Route::post('/matching/{partien_id}/{psy_id}','App\Http\Controllers\AdminController@creat_session')->name('post.matching');
    Route::get('/matching/chose psy/{id}','App\Http\Controllers\AdminController@chose_psy')->name('chose.psy');
    Route::get('/session','App\Http\Controllers\AdminController@session')->name('session');
    Route::get('/home','App\Http\Controllers\AdminController@dashboard_home')->name('dashboard_home');
});
Route::group(['prefix'=>'psychologe'],function(){
    Route::get('/MyPartiens','App\Http\Controllers\PsyController@MyPartiens')->name('MyPartiens');
    Route::get('/My New Sessions','App\Http\Controllers\PsyController@MyNewSessions')->name('my.new.sessions');
});