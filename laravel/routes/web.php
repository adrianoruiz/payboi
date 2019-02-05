<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Auth::routes();

#####################################
#########SITE ROTAS#################
Route::get('/', 'Site\HomeController@index');
Route::get('/construcao/{slug_title}', 'Site\HomeController@article');
Route::get('/blog/{section?}/{category?}', 'Site\HomeController@blog');
Route::get('/termos', 'Site\HomeController@terms');
Route::get('/recuperarSenha/{token}', 'Site\ForgotController@forgot');
Route::post('/storePasswordForgot', 'Site\ForgotController@store');




#####################################
#########ADMIN ROTAS#################
Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'as' => 'admin.'], function(){
    Route::get('/', 'Admin\AdminController@index')->name("main");

    Route::get('/getCitiesByState/{id}', 'Admin\CityController@getCitiesByState');
  

	//users
	Route::group(['prefix' => 'users', 'as' => 'users.'], function() {
		Route::get('/index',['as'=> 'index', 'uses' => 'Admin\UsersController@index']);
		Route::get('/edit/{id}',['as' => '/edit', 'uses' => 'Admin\UsersController@edit']);
		Route::get('/editAngular/{id}',['as' => 'editAngular', 'uses' => 'Admin\UsersController@editAngular']);
		Route::get('/create',['as' => 'create', 'uses' => 'Admin\UsersController@create']);


		Route::post('/delete',['as' => 'delete', 'uses' => 'Admin\UsersController@destroy']);
		Route::post('/store', ['as' => 'store', 'uses' => 'Admin\UsersController@store']);
		Route::post('/update/{id}', ['as' => 'update', 'uses' => 'Admin\UsersController@update']);
		
		Route::post('/saveAvatar', 'Admin\UsersController@saveAvatar');


	});

	Route::group(['prefix' => 'evaluation', 'as' => 'evaluation.'], function() {
		Route::get('/index',['as'=> 'index', 'uses' => 'Admin\EvaluationController@index']);
		Route::get('/{id}',['as'=> '{id}', 'uses' => 'Admin\EvaluationController@evaluationPost']);
		

	});

	Route::group(['prefix' => 'fornecedor', 'as' => 'fornecedor.'], function() {
		Route::get('/index',['as'=> 'index', 'uses' => 'Admin\FornecedorController@index']);
		Route::get('/edit/{id}',['as' => 'edit', 'uses' => 'Admin\FornecedorController@edit']);
		Route::get('/editAngular/{id}',['as' => 'editAngular', 'uses' => 'Admin\FornecedorController@editAngular']);
		Route::get('/create',['as' => 'create', 'uses' => 'Admin\FornecedorController@create']);


		Route::post('/delete',['as' => 'delete', 'uses' => 'Admin\FornecedorController@destroy']);

		Route::post('/store', ['as' => 'store', 'uses' => 'Admin\FornecedorController@store']);
		Route::post('/update/{id}', ['as' => 'update', 'uses' => 'Admin\FornecedorController@update']);

	});

	Route::group(['prefix' => 'client', 'as' => 'client.'], function() {
		Route::get('/index',['as'=> 'index', 'uses' => 'Admin\ClientController@index']);
		Route::get('/preParceiro',['as'=> 'preParceiro', 'uses' => 'Admin\ClientController@preParceiro']);
		Route::get('/edit/{id}',['as' => 'edit', 'uses' => 'Admin\ClientController@edit']);
		Route::get('/editAngular/{id}',['as' => 'editAngular', 'uses' => 'Admin\ClientController@editAngular']);
		Route::get('/create',['as' => 'create', 'uses' => 'Admin\ClientController@create']);


		Route::post('/delete',['as' => 'delete', 'uses' => 'Admin\ClientController@destroy']);
		Route::post('/aceitarParceiro',['as' => 'aceitarParceiro', 'uses' => 'Admin\ClientController@aceitarParceiro']);
		Route::post('/rejeitarParceiro',['as' => 'rejeitarParceiro', 'uses' => 'Admin\ClientController@rejeitarParceiro']);

		Route::post('/store', ['as' => 'store', 'uses' => 'Admin\ClientController@store']);
		Route::post('/update/{id}', ['as' => 'update', 'uses' => 'Admin\ClientController@update']);

	});

	Route::group(['prefix' => 'activity', 'as' => 'activity.'], function() {
		Route::get('/index',['as'=> 'index', 'uses' => 'Admin\ActivityController@index']);
		Route::get('/edit/{id}',['as' => 'edit', 'uses' => 'Admin\ActivityController@edit']);
		Route::get('/editAngular/{id}',['as' => 'editAngular', 'uses' => 'Admin\ActivityController@editAngular']);
			
		Route::post('/delete',['as' => 'delete', 'uses' => 'Admin\ActivityController@destroy']);
		Route::get('/create',['as' => 'create', 'uses' => 'Admin\ActivityController@create']);
		Route::post('/uploadFile', ['as' => 'uploadFile', 'uses' => 'Admin\ActivityController@uploadFile']);

		Route::post('/store', ['as' => 'store', 'uses' => 'Admin\ActivityController@store']);
		Route::post('/update/{id}', ['as' => 'update', 'uses' => 'Admin\ActivityController@update']);
		
	});

	Route::group(['prefix' => 'section', 'as' => 'section.'], function() {
		Route::get('/index',['as'=> 'index', 'uses' => 'Admin\SectionController@index']);
		Route::get('/edit/{id}',['as' => 'edit', 'uses' => 'Admin\SectionController@edit']);
		Route::get('/editAngular/{id}',['as' => 'editAngular', 'uses' => 'Admin\SectionController@editAngular']);
		
		Route::post('/delete',['as' => 'delete', 'uses' => 'Admin\SectionController@destroy']);
		Route::get('/create',['as' => 'create', 'uses' => 'Admin\SectionController@create']);

		Route::post('/store', ['as' => 'store', 'uses' => 'Admin\SectionController@store']);
		Route::post('/update/{id}', ['as' => 'update', 'uses' => 'Admin\SectionController@update']);
	});

	Route::group(['prefix' => 'category', 'as' => 'category.'], function() {
		Route::get('/index',['as'=> 'index', 'uses' => 'Admin\CategoryController@index']);
		Route::get('/edit/{id}',['as' => 'edit', 'uses' => 'Admin\CategoryController@edit']);
		Route::get('/editAngular/{id}',['as' => 'editAngular', 'uses' => 'Admin\CategoryController@editAngular']);

		Route::post('/delete',['as' => 'delete', 'uses' => 'Admin\CategoryController@destroy']);
		Route::get('/create',['as' => 'create', 'uses' => 'Admin\CategoryController@create']);
		Route::post('/uploadFile', ['as' => 'uploadFile', 'uses' => 'Admin\CategoryController@uploadFile']);

		Route::post('/store', ['as' => 'store', 'uses' => 'Admin\CategoryController@store']);
		Route::post('/update/{id}', ['as' => 'update', 'uses' => 'Admin\CategoryController@update']);

		// atividade
		Route::get('/create_atv',['as' => 'create_atv', 'uses' => 'Admin\CategoryController@create_atv']);
		Route::get('/getCreate_atv/{id}',['as' => 'create_atv', 'uses' => 'Admin\CategoryController@getCreate_atv']);
		
		Route::post('/storeCatActive/{id_catagory}', ['as' => 'store', 'uses' => 'Admin\CategoryController@storeCatActive']);

		Route::post('/resetar', ['as' => 'store', 'uses' => 'Admin\CategoryController@resetarCatActive']);

		
	});

	Route::group(['prefix' => 'content', 'as' => 'content.'], function() {
		Route::get('/index',['as'=> 'index', 'uses' => 'Admin\ContentController@index']);
		Route::get('/get_category/{id}',['as' => 'get_category', 'uses' => 'Admin\ContentController@get_category']);
		Route::get('/edit/{id}',['as' => 'edit', 'uses' => 'Admin\ContentController@edit']);
		Route::get('/editAngular/{id}',['as' => 'editAngular', 'uses' => 'Admin\ContentController@editAngular']);

		Route::post('/delete',['as' => 'delete', 'uses' => 'Admin\ContentController@destroy']);
		Route::get('/create',['as' => 'create', 'uses' => 'Admin\ContentController@create']);
		Route::post('/uploadFile', ['as' => 'uploadFile', 'uses' => 'Admin\ContentController@uploadFile']);


		Route::post('/store', ['as' => 'store', 'uses' => 'Admin\ContentController@store']);
		Route::post('/update/{id}', ['as' => 'update', 'uses' => 'Admin\ContentController@update']);
	});

});
