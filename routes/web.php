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
/*
	后台模版共享数据
		common_cates_date  后台分类处理

 */
// 后台首页的路由
Route::get('/admins','Admin\UserController@index');
// 后台用户的路由
Route::get('/admin/user/info','Admin\UserController@info');
Route::get('/admin/user/recover/{id}','Admin\UserController@recover');//恢复数据
Route::resource('/admin/user','Admin\UserController');//后台用户的路由
// 后台用户管理员的路由
Route::resource('/admin/useradmin','Admin\UseradminController');
// 后台分类的路由
Route::resource('/admin/cates','Admin\CatesController');
// 后台标签云路由
Route::resource('/admin/labels','Admin\LabelsController');
// 后台文章管理路由
Route::resource('admin/articles','Admin\ArticlesController');

// 5.5 测试路由
Route::resource('admin/test','Admin\TestController');

