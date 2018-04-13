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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'FrontEndController@index')->name('index');

Route::get('/about', 'FrontEndController@about')->name('about');

Route::get('/lapor', 'FrontEndController@lapor')->name('lapor');

Route::get('/lokasi', 'FrontEndController@lokasi')->name('lokasi');

Route::get('/signup', 'FrontEndController@signup')->name('signup');

Route::get('/signin', 'FrontEndController@signin')->name('signin');

Route::get('/profile', [
    'uses' => 'FrontEndController@profile',
    'as' => 'profile',
])->middleware('auth');

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'],
    function(){
        Route::get('/dashboard', 'HomeController@index')->name('home');

        Route::get('/posts', [
           'uses' => 'PostsController@index',
            'as' => 'posts',
        ]);

        Route::get('/posts/trashed', [
            'uses' => 'PostsController@trashed',
            'as' => 'posts.trashed',
        ]);

        Route::get('/post/create', [
            'uses' => 'PostsController@create',
            'as' => 'post.create',
        ]);

        Route::post('/post/store', [
            'uses' => 'PostsController@store',
            'as' => 'post.store',
        ]);

        Route::get('/post/{id}/edit', [
            'uses' => 'PostsController@edit',
            'as' => 'post.edit',
        ]);

        Route::post('/post/{id}/update', [
            'uses' => 'PostsController@update',
            'as' => 'post.update',
        ]);

        Route::get('/post/{id}/delete/', [
            'uses' => 'PostsController@destroy',
            'as' => 'post.delete',
        ]);

        Route::get('/post/{id}/kill/', [
            'uses' => 'PostsController@kill',
            'as' => 'post.kill',
        ]);

        Route::get('/post/{id}/restore', [
            'uses' => 'PostsController@restore',
            'as' => 'post.restore',
        ]);

        Route::get('categories', [
            'uses' => 'CategoriesController@index',
            'as' => 'categories',
        ]);


        Route::get('/category/create', [
            'uses' => 'CategoriesController@create',
            'as' => 'category.create',
        ]);

        Route::post('/category/store', [
            'uses' => 'CategoriesController@store',
            'as' => 'category.store',
        ]);

        Route::get('/category/{id}/edit', [
            'uses' => 'CategoriesController@edit',
            'as' => 'category.edit',
        ]);

        Route::get('/category/{id}/delete', [
            'uses' => 'CategoriesController@destroy',
            'as' => 'category.delete',
        ]);

        Route::post('/category/{id}/update', [
            'uses' => 'CategoriesController@update',
            'as' => 'category.update',
        ]);

            Route::get('cities', [
                'uses' => 'CitiesController@index',
                'as' => 'cities',
            ]);


            Route::get('/city/create', [
                'uses' => 'CitiesController@create',
                'as' => 'city.create',
            ]);

            Route::post('/city/store', [
                'uses' => 'CitiesController@store',
                'as' => 'city.store',
            ]);

            Route::get('/city/{id}/edit', [
                'uses' => 'CitiesController@edit',
                'as' => 'city.edit',
            ]);

            Route::get('/city/{id}/delete', [
                'uses' => 'CitiesController@destroy',
                'as' => 'city.delete',
            ]);

            Route::post('/city/{id}/update', [
                'uses' => 'CitiesController@update',
                'as' => 'city.update',
            ]);


        Route::get('/users', [
            'uses' => 'UsersController@index',
            'as' => 'users',
        ]);

        Route::get('/user/create', [
            'uses' => 'UsersController@create',
            'as' => 'user.create',
        ]);

        Route::post('/user/store', [
            'uses' => 'UsersController@store',
            'as' => 'user.store',
        ]);

        Route::get('/user/{id}/delete', [
            'uses' => 'UsersController@destroy',
            'as' => 'user.delete',
        ]);

        Route::get('/user/{id}/admin', [
            'uses' => 'UsersController@admin',
            'as' => 'user.admin'
        ]);

        Route::get('/user/{id}/not-admin', [
            'uses' => 'UsersController@not_admin',
            'as' => 'user.not.admin'
        ]);

        Route::get('/user/profile', [
            'uses' => 'ProfilesController@index',
            'as' => 'user.profile',
        ]);

        Route::post('/user/profile/update', [
            'uses' => 'ProfilesController@update',
            'as' => 'user.profile.update'
        ]);

        Route::get('/settings', [
            'uses' => 'SettingsController@index',
            'as' => 'settings',
        ]);

        Route::post('/settings/update', [
            'uses' => 'SettingsController@update',
            'as' => 'settings.update'
        ]);
    }
);
