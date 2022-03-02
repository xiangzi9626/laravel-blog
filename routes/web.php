<?php
//////////////////////////////////
Route::post("test", "test\TestController@testajax");
///////////////////////////////
Route::get('/', function () {
    return view('welcome');
});
///////////////////////////////
Route::get("admin/login", function () {
    if (session("user")) {
        return redirect("/admin");
    }
    return view("admin.login");
});
Route::post("admin/login", "admin\AdminLoginController@login");
Route::get("captcha", "admin\AdminLoginController@captcha");
//////////管理后台////////////////////
Route::group(["middleware" => "admin_login"], function () {
    Route::post("admin/logout", "admin\AdminLoginController@logout");
    Route::get('admin', function () {
        return view('admin.index');
    });
    Route::get("admin/modify_admin_password_show", function () {
        return view("admin.modify_admin_password");
    });
    Route::post("admin/modify_admin_password", "admin\AdminController@modify_admin_password");
    Route::get("admin/add_admin_show", "admin\AdminController@add_admin_show");
    Route::post("admin/add_admin", "admin\AdminController@add_admin");
    Route::get("admin/edit_admin_show", "admin\AdminController@edit_admin_show");
    Route::post("admin/edit_admin/{id}", "admin\AdminController@edit_admin");
    Route::post("admin/delete_admin/{id}", "admin\AdminController@delete_admin");
    Route::get('admin/admin_list', "admin\AdminController@admin_list");
    Route::get("admin/user_list", "admin\UserController@user_list");
    Route::any('admin/menu_list', "admin\MenuController@menu_list");
    Route::get('admin/init', "admin\MenuController@getSystemInit");
    Route::get("admin/clear_cache", 'admin\ClearController@clear_cache');
    Route::get("admin/add_menu_show", "admin\MenuController@add_menu_show");
    Route::post("admin/add_menu", "admin\MenuController@add_menu");
    Route::get("admin/edit_menu_show", "admin\MenuController@edit_menu_show");
    Route::post("admin/edit_menu/{id}", "admin\MenuController@edit_menu");
    Route::post("admin/delete_menu", "admin\MenuController@delete_menu");
    Route::post("admin/menu_switch", "admin\MenuController@menu_switch");
    Route::get("admin/article_list", "admin\ArticleController@article_list");
    Route::get("admin/add_article_show", "admin\ArticleController@add_article_show");
    Route::post("admin/add_article", "admin\ArticleController@add_article");
    Route::get("admin/edit_article_show", "admin\ArticleController@edit_article_show");
    Route::post("admin/edit_article/{id}", "admin\ArticleController@edit_article");
    Route::post("admin/article_switch", "admin\ArticleController@article_switch");
    Route::post("admin/delete_article", "admin\ArticleController@delete_article");
    Route::get("admin/class_list", "admin\ClassController@class_list");
    Route::get("admin/add_class_show", "admin\ClassController@add_class_show");
    Route::post("admin/add_class", "admin\ClassController@add_class");
    Route::get("admin/edit_class_show", "admin\ClassController@edit_class_show");
    Route::post("admin/edit_class/{id}", "admin\ClassController@edit_class");
    Route::post("admin/delete_class", "admin\ClassController@delete_class");
    Route::get("admin/class_select", "admin\ArticleController@class_select");
});
