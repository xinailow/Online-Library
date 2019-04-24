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

Route::get('/file', function () {
    return view('file');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/security', function () {
    return view('security');
});

Route::get('/term', function () {
    return view('term');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/file/store', [
    'uses'=>'FileController@store'
]);

Route::get('/main',[
    'uses'=>'MainController@index',
]);

Route::get('/main/{category}',[
    'uses'=>'MainController@categoryIndex',
]);

Route::get('/detail',[
    'uses'=>'MainController@show1',
    
]);
Route::get('/detail/{name}',[
    'uses'=>'DetailController@show1',
    'as' => 'detail'
]);
Route::post('/detail',[
    'uses'=>'DetailController@store',
]);

Route::put('/detail/{name}',[
    'uses'=>'DetailController@update',
]);

Route::get('/log',[
    'uses'=>'LogController@index',
    'as' => 'log'
]);

Route::get('/log/{id}',[
    'uses'=>'LogController@logrent',
]);

Route::get('/log/book/{id}', 'LogController@read');

Route::get('/read/{category}', 'ReadController@index');

Route::post('detail/reply/{id}',[
    'uses'=>'DetailController@reply',
    'as'=>'detail.reply'
]);

Route::get('/upload',function(){
    return view('uploadAvatar');
});

Route::post('/uploaded',[
    'uses'=>'DetailController@upload',
    'as'=>'upload.image'
]);
