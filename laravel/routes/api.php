<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');



// login e cadastro user
Route::group(['prefix' => 'user'], function () {

    Route::post('login', 'Api\UsersController@login');
    Route::post('loginFacebook', 'Api\UsersController@loginFacebook');
    Route::get('/recuperaSenha/{email}', 'Api\UsersController@recuperaSenha');
    Route::post('cadastrar_user', 'Api\UsersController@cadastrar_user');

});



Route::group(['prefix' => 'users'], function () {

    Route::get('/listUsersByActivitys/{idCategory}', 'Api\UsersController@listUsersByActivitys');

    Route::post('/store', 'Api\UsersController@store');
    Route::post('/update', 'Api\UsersController@update');

    // foto avatar
    Route::post('salvar_foto', 'Api\UsersController@salvar_foto');
    Route::post('salvar_logomarca', 'Api\UsersController@salvar_logomarca');
    
    Route::post('editar_foto', 'Api\UsersController@editar_foto');

    Route::get('relogar/{iduser}/{token}', 'Api\UsersController@relogar');   

});



Route::group(['prefix' => 'content'], function () {

    Route::get('/listContents/{category_id}', 'Api\ContentController@listContents');

    Route::get('/listContent/{id}', 'Api\ContentController@listContent');

    Route::get('/searchContents/{termo}/{type?}', 'Api\ContentController@searchContents');
    
    Route::get('/setview/{id_post}', 'Api\ContentController@setview');

});


Route::group(['prefix' => 'evaluation'], function() {       
    Route::get('/getQuestion', 'Api\EvaluationController@getQuestion');
    Route::get('/getAnswer/{idUser}', 'Api\EvaluationController@getAnswer');
    Route::post('/setAnswer', 'Api\EvaluationController@setAnswer');
    
});


Route::group(['prefix' => 'activitys'], function () {

    Route::get('/listActivitys', 'Api\ActivityController@listActivitys');

    Route::get('/listActivitysByCategory/{idCategory}', 'Api\ActivityController@listActivitysByCategory');
    Route::get('/infoUser/{idUser}', 'Api\ActivityController@infoUser');
});



Route::group(['prefix' => 'state'], function () {

    Route::get('/listState', 'Api\CityStateController@listState');

});



Route::group(['prefix' => 'city'], function () {

    Route::get('/listCityByState/{idState}', 'Api\CityStateController@listCityByState');

});



Route::group(['prefix' => 'section'], function () {

    Route::get('/listSections', 'Api\SectionController@listSections');

});



Route::group(['prefix' => 'category'], function () {

    Route::get('/listCategoryBySection/{idSection}', 'Api\CategoryController@listCategoryBySection');
    Route::get('/listCategory/{idCategory}', 'Api\CategoryController@listCategory');

});



Route::group(['prefix' => 'usersHasStep'], function () {

    Route::post('/step', 'Api\UsersHasStepController@step');

});



Route::group(['prefix' => 'contact'], function() {
    Route::post('/sendMail', 'Api\ContactController@sendMail');
});

