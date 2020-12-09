<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('file/user_list', 'FileController@userList');
Route::post('file/user_list', 'FileController@userSave');
//route untuk user
/*
Route::get('user', 'User\UserController@User');
Route::get('userid/{id_user}', 'User\UserController@userbyID');
Route::post('user', 'User\UserController@userSave');
Route::put('user/{id_user}', 'User\UserController@userUpdate');
Route::delete('user/{user}', 'User\UserController@userDelete');
*/
/*
Route::group(['middleware' => 'auth:api'], function () {
    Route::apiResource('user', 'User\User');
});
*/
Route::apiResource('user', 'User\User');

//route untuk role
/*
Route::get('role', 'Role\RoleController@Role');
Route::get('role/{id_role}', 'Role\RoleController@rolebyID');
Route::post('role', 'Role\RoleController@roleSave');
Route::put('role/{id_role}', 'Role\RoleController@roleUpdate');
Route::delete('role/{role}', 'Role\RoleController@roleDelete');
*/
//Route::group(['middleware' => 'auth:api'], function () {
Route::apiResource('role', 'Role\Role');
//});
//route untuk group
/*
Route::get('group', 'Group\GroupController@Group');
Route::get('group/{id_group}', 'Group\GroupController@groupbyID');
Route::post('group', 'Group\GroupController@groupSave');
Route::put('group/{id_group}', 'Group\GroupController@groupUpdate');
Route::delete('group/{group}', 'Group\GroupController@groupDelete');
*/
//Route::group(['middleware' => 'auth:api'], function () {
Route::apiResource('group', 'Group\Group');
//});

//route untuk tryout
/*
Route::get('tryout', 'Tryout\TryoutController@Tryout');
Route::get('tryout/{id_tryout}', 'Tryout\TryoutController@tryoutbyID');
Route::post('tryout', 'Tryout\TryoutController@tryoutSave');
Route::put('tryout/{id_tryout}', 'Tryout\TryoutController@tryoutUpdate');
Route::delete('tryout/{tryout}', 'Tryout\TryoutController@tryoutDelete');
*/
Route::apiResource('tryout', 'Tryout\Tryout');

//route untuk soal
/*
Route::get('soal', 'Soal\SoalController@Soal');
Route::get('soal/{id_soal}', 'Soal\SoalController@soalbyID');
Route::post('soal', 'Soal\SoalController@soalSave');
Route::put('soal/{id_soal}', 'Soal\SoalController@soalUpdate');
Route::delete('soal/{soal}', 'Soal\SoalController@soalDelete');
*/
Route::apiResource('soal', 'Soal\Soal');

//route untuk section
/*
Route::get('section', 'Section\SectionController@Section');
Route::get('section/{id_section}', 'Section\SectionController@sectionbyID');
Route::post('section', 'Section\SectionController@sectionSave');
Route::put('section/{id_section}', 'Section\SectionController@sectionUpdate');
Route::delete('section/{section}', 'Section\SectionController@sectionDelete');
*/
Route::apiResource('section', 'Section\Section');

//route untuk pilihan
/*
Route::get('pilihan', 'Pilihan\PilihanController@Pilihan');
Route::get('pilihan/{id_pilihan}', 'Pilihan\PilihanController@pilihanbyID');
Route::post('pilihan', 'Pilihan\PilihanController@pilihanSave');
Route::put('pilihan/{id_pilihan}', 'Pilihan\PilihanController@pilihanUpdate');
Route::delete('pilihan/{pilihan}', 'Pilihan\PilihanController@pilihanDelete');
*/
Route::apiResource('pilihan', 'Pilihan\Pilihan');

//route untuk question1
/*
Route::get('question1', 'Question1\Question1Controller@Question1');
Route::get('question1/{id_question_attempt}', 'Question1\Question1Controller@question1byID');
Route::post('question1', 'Question1\Question1Controller@question1Save');
Route::put('question1/{id_question_attempt}', 'Question1\Question1Controller@question1Update');
Route::delete('question1/{question1}', 'Question1\Question1Controller@question1Delete');
*/
Route::apiResource('question1', 'Question1\Question1');

//route untuk question2
/*
Route::get('question2', 'Question2\Question2Controller@Question2');
Route::get('question2/{id_question_attempt2}', 'Question2\Question2Controller@question2byID');
Route::post('question2', 'Question2\Question2Controller@question2Save');
Route::put('question2/{id_question_attempt2}', 'Question2\Question2Controller@question2Update');
Route::delete('question2/{question2}', 'Question2\Question2Controller@question2Delete');
*/
Route::apiResource('question2', 'Question2\Question2');
