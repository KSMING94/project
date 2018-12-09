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
//첫 메인 페이지
Route::get('/', function(){
	return view('start.index');
});

//첫 메인 페이지의 소개 페이지
Route::get('intro', function(){
	return view('start.intro');
});

//로그인 완료 후 페이지
Route::get('main', function(){
	return view('main.index');
});

Route::get('page1', function(){
	return view('page1.index');
});


Route::get('bbs', 'BBSController@index');

Route::get('board','BBSController@index');

//project write_form.
Route::get('write','BBSController@create');

//project write
Route::post('write_start','BBSController@store');


Route::get('view', function(){
	return view('bbs.view');

});

Route::get('modify', function(){
	return view('bbs.modify_form');

});

Route::post('modify', function(){
	return view('bbs.modify');

});

Route::post('delete', function(){
	return view('bbs.delete');

});

Route::get('write', function(){
	return view('bbs.write_form');

});

Route::post('write', function(){
	return view('bbs.write');

});

Route::get('template', function(){
	return view('layouts.app');

});

//두번째게시판 요청 컨트롤러

//두번째게시판 전달 컨트롤러

//두번째게시판 목록 보여주기




//세번째게시판 요청 컨트롤러

//세번째게시판 전달 컨트롤러

//세번째게시판 목록 보여주기



//로그인 컨트롤러
Route::post('login',[
	'as'=>'login',
	'uses'=>'LoginController@login'
]);

//회원가입 폼 컨트롤러
Route::get('register/get',[
	'as'=>'register.get',
	'uses'=>'RegisterController@index'
]);

//회원가입 정보 전달 컨트롤러
Route::post('register/post',[
	'as'=>'register.post',
	'uses'=>'RegisterController@join'
]);


//로그아웃 
Route::get('logout',[
	'as'=>'logout',
	'uses'=>'LoginController@logout'
]);