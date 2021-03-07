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

Route::view('/', 'site.pages.homepage');
Route::get('profile/{id}/{slug}', 'FrontendController@showProfile')->name('profile.frontend.show');

Route::get('/about-us', function () {
    return view('site.pages.about-us');
});

Route::get('/contact-us', function () {
    return view('site.pages.contact-us');
});

// SNIGDHO
Route::post('request/store', 'FrontendController@storeRequest')->name('request.store');

Route::get('/send-request', function () {
  
  return view('site.pages.requests.frontend.request');
});

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
    'login' => false,
]);

Route::get('/sVjmQESZgdVsRnbwLhRyDh', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/sVjmQESZgdVsRnbwLhRyDh', 'Auth\LoginController@login');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/results', function () {
  $profiles = App\Profile::where('name', 'like', '%' . request('query') . '%')->paginate(4);
  // dd($profiles);
  $que = request('query');
  return view('site.pages.profile.frontend.searchresult', compact('profiles','que'));
  });

Route::get('settings',  ['as' => 'settings.index', 'uses' => 'HomeController@sitesettings']);
Route::post('settings/update', 'HomeController@updatesettings')->name('settings.update');

Route::get('profiles',  ['as' => 'profiles.list', 'uses' => 'ProfileController@index']);
Route::get('profiles/new',  ['as' => 'profiles.create', 'uses' => 'ProfileController@create']);
Route::post('profiles/store', 'ProfileController@store')->name('profiles.store');
Route::get('profiles/{id}/show', 'ProfileController@show')->name('profiles.show');
Route::get('profiles/edit/{id}', 'ProfileController@edit')->name('profiles.edit');
Route::post('profiles/{id}/update', 'ProfileController@update')->name('profiles.update');
Route::get('profiles/{id}/delete', 'ProfileController@delete')->name('profiles.delete');


Route::get('requests',  ['as' => 'requests.list', 'uses' => 'ProfileRequestController@index']);
Route::get('requests/profile/{id}/update', 'ProfileRequestController@update')->name('requests.profiles.update');
Route::get('requests/profile/{id}/status/update/{value}', 'ProfileRequestController@updatestatus')->name('requests.profiles.update.status');
Route::get('requests/profile/{id}/delete', 'ProfileRequestController@delete')->name('requests.profiles.delete');


// Route::get('profile/{slug}/{id}', 'HomeController@show')->name('profile.frontend.show');