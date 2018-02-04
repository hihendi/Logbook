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

Auth::routes();

Route::prefix('/manage')->middleware('role:noc|teknisi|marketing|customer')->group(function (){
      Route::get('/', 'ManageController@index');
      Route::get('/admindashboard', 'ManageController@NocDashboard')->name('manage.nocdashboard');
      Route::get('/teknisidashboard', 'ManageController@TeknisiDashboard')->name('manage.teknisidashboard');
      Route::get('/marketingdashboard', 'ManageController@MarketingDashboard')->name('manage.marketingdashboard');
      Route::get('/customerdashboard', 'ManageController@CustomerDashboard')->name('manage.customerdashboard');
      Route::resource('/users', 'UserController')->middleware('role:noc');

});

  Route::group(['prefix'=>'marketing', 'middleware'=>['role:marketing']], function(){

      Route::get('/','MarketingController@home')->name('marketing.home');
      Route::get('/index','MarketingController@index')->name('marketing.index');
      Route::get('/create','MarketingController@create')->name('marketing.create');
      Route::get('/index/{marketing}','MarketingController@show')->name('marketing.show');
      Route::get('/index/{marketing}/edit','MarketingController@edit')->name('marketing.edit');
      Route::post('/index','MarketingController@store')->name('marketing.store');
      Route::patch('/index/{marketing}','MarketingController@update')->name('marketing.update');
      Route::delete('/delete','MarketingController@delete')->name('marketing.delete');
      Route::get('/marketing_datatable','MarketingController@datatable')->name('marketing.datatable');
    });


                                // ---Route Logbook---

    Route::group(['prefix'=>'logbook', 'middleware'=>['role:noc|teknisi']], function(){

        Route::get('/','LogbookController@home')->name('logbook.home');
        Route::get('/index','LogbookController@index')->name('logbook.index');
        Route::get('/create','LogbookController@create')->name('logbook.create');
        Route::get('/index/{logbook}/edit','LogbookController@edit')->name('logbook.edit');
        Route::post('/index','LogbookController@store')->name('logbook.store');
        Route::patch('/index/{logbook}','LogbookController@update')->name('logbook.update');
        Route::get('/index/{logbook}','LogbookController@show')->name('logbook.show');
        Route::get('/logbook_datatable', 'LogbookController@datatable')->name('logbook.datatable');
        Route::delete('/delete', 'LogbookController@delete')->name('logbook.delete');
      });

    Route::group(['prefix'=>'customer'], function(){
        Route::get('/','CustomerController@home')->name('customer.home');
        Route::get('/index', 'CustomerController@index')->name('customer.index');
        Route::get('/customer_datatable', 'CustomerController@datatable')->name('customer.datatable');
      });

Route::get('/home', 'HomeController@index')->name('home');
