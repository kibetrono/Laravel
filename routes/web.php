<?php
use App\Science;
use App\History;
use App\Art;
use App\Novel;
use Illuminate\Support\Facades\Input;

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
    return view('welcomeww');
});


Route::get('/weather',function(){
    return view('weather');
});
Route::get('/index',function(){
    return view('index');
});
Route::get('/',function(){
    return view('interface2');
});
Route::get('/slides',function(){
    return view('slideShow');
});
Route::any ( '/search', function () {
    $q = Request::input ( 'q' );
    $user = Science::where ( 'site_title', 'LIKE', '%' . $q . '%' )->orWhere ( 'site_keywords', 'LIKE', '%' . $q . '%' )->get ();
    $user2 = History::where ( 'site_title', 'LIKE', '%' . $q . '%' )->orWhere ( 'site_keywords', 'LIKE', '%' . $q . '%' )->get ();

    if (count ( $user ) > 0)
        return view ( 'search' )->withDetails ( $user )->withQuery ( $q );
    elseif(count ( $user2 ) > 0)
    return view ( 'search' )->withDetails ( $user2 )->withQuery ( $q );
    else
    return view ( 'search' )->withMessage ( 'No Details found. Try to search again !' );

} );

Route::any ( '/searchHistoricals', function () {
    $q = Request::input ( 'q' );
    $user = History::where ( 'site_title', 'LIKE', '%' . $q . '%' )->orWhere ( 'site_keywords', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $user ) > 0)
        return view ( 'Historicals.search' )->withDetails ( $user )->withQuery ( $q );
    else
        return view ( 'Historicals.search' )->withMessage ( 'No Details found. Try to search again !' );
} );

Route::any ( '/searchSciences', function () {
    $q = Request::input ( 'q' );
    $user = Science::where ( 'site_title', 'LIKE', '%' . $q . '%' )->orWhere ( 'site_keywords', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $user ) > 0)
        return view ( 'Sciences.search' )->withDetails ( $user )->withQuery ( $q );
    else
        return view ( 'Sciences.search' )->withMessage ( 'No Details found. Try to search again !' );
} );

Route::any ( '/searchArts', function () {
    $q = Request::input ( 'q' );
    $user = Art::where ( 'site_title', 'LIKE', '%' . $q . '%' )->orWhere ( 'site_keywords', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $user ) > 0)
        return view ( 'Arts.search' )->withDetails ( $user )->withQuery ( $q );
    else
        return view ( 'Arts.search' )->withMessage ( 'No Details found. Try to search again !' );
} );

Route::any ( '/searchNovels', function () {
    $q = Request::input ( 'q' );
    $user = Art::where ( 'site_title', 'LIKE', '%' . $q . '%' )->orWhere ( 'site_keywords', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $user ) > 0)
        return view ( 'Novels.search' )->withDetails ( $user )->withQuery ( $q );
    else
        return view ( 'Novels.search' )->withMessage ( 'No Details found. Try to search again !' );
} );

Route::get('/sendemail', 'EmailController@index');
Route::post('/sendemail/send', 'EmailController@send');
Route::get('/contactUs', 'EmailController@contact');// for contact - us page

/* This are used for authentication
It Scauffold the whole system of authentication */
Auth::routes();//found on /vendor/laravel/framework/src/Illuminate/Routing/Router.php

Route::get('/home', 'HomeController@index')->name('home');
/* End of authentication*/

Route::resource('/main','MainController');
Route::get('/library','MainController@library');
Route::get('/sports','SportsController@index');

Route::get('scienceadd','ScienceController@create')->middleware('auth');
Route::post('add','ScienceController@store');
Route::get('science','ScienceController@index')->middleware('auth');
Route::get('scienceshow','ScienceController@display');
Route::get('editScience/{id}','ScienceController@edit')->middleware('auth');
Route::post('updateScience/{id}','ScienceController@update');
Route::delete('deleteScience/{id}','ScienceController@destroy');

Route::get('addHistoricals','HistoryController@create')->middleware('auth');
Route::post('historicalsSave','HistoryController@store');
Route::get('historicals','HistoryController@index')->middleware('auth');
Route::get('historicalsShow','HistoryController@display');
Route::get('editHistoricals/{id}','HistoryController@edit')->middleware('auth');
Route::post('updateHistoricals/{id}','HistoryController@update');
Route::delete('deleteHistoricals/{id}','HistoryController@destroy');

Route::get('/addArts','ArtsController@create')->middleware('auth');
Route::post('saveArts','ArtsController@store');
Route::get('showArts','ArtsController@display');
Route::get('editArts/{id}','ArtsController@edit')->middleware('auth');
Route::get('Arts','ArtsController@index')->middleware('auth');
Route::post('updateArts/{id}','ArtsController@update');
Route::delete('deleteArts/{id}','ArtsController@destroy');

Route::get('addNovel','NovelController@create')->middleware('auth');
Route::post('saveNovel','NovelController@store');
Route::get('Novel','NovelController@index')->middleware('auth');
Route::get('ShowNovel','NovelController@display');
Route::get('NovelEdit/{id}','NovelController@edit')->middleware('auth');
Route::post('UpdateNovel/{id}','NovelController@update');
Route::delete('deleteNovel/{id}','NovelController@destroy');

