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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'PagesController@home' );
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'TicketsController@create');
Route::post('/contact', 'TicketsController@store');
Route::get('/tickets', ['uses' => 'TicketsController@index', 'as' => 'tickets']);
Route::get('/tickets/{slug?}', 'TicketsController@show');
Route::get('tickets/{slug?}/edit', 'TicketsController@edit');
Route::post('tickets/{slug?}/edit', 'TicketsController@update');
Route::post('tickets/{slug?}/delete', 'TicketsController@destroy');
Route::post('/comment', 'CommentsController@newComment');
Route::get('home', 'PagesController@home');

//Users
// Route::get('/users/register', 'Auth\RegisterController@getRegister');
// Route::post('/users/register', 'Auth\RegisterController@postRegister');
Auth::routes();
// $this->get('/login', 'Auth\LoginController@showLoginForm')->name('login');
// $this->post('/login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// // Registration Routes...
// $this->get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// $this->post('/register', 'Auth\RegisterController@register');

// // Password Reset Routes...
// $this->get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//  $this->post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// $this->get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// $this->post('/password/reset', 'Auth\ResetPasswordController@reset');

Route::group(array('prefix' => 'admin', 'middleware' => 'manager', 'namespace' => 'Admin'), function()
                    {
                      Route::get('users', ['as' => 'admin.user.index', 'uses' =>'UsersController@index']);
                      Route::get('roles', 'RolesController@index');
                      Route::get('roles/users/create', 'RolesController@create');
                      Route::post('roles/users/create', 'RolesController@store');
                      Route::get('roles/users/index', 'RolesController@index');
                      Route::get('roles/users/{id?}/edit', 'UsersController@edit');
                      Route::post('roles/users/{id?}/edit', 'UsersController@update');
                      Route::get('/', 'PagesController@home');

                      Route::get('posts', 'PostsController@index');
                      Route::get('posts/create', 'PostsController@create');
                      Route::post('posts/create', 'PostsController@store');
                      Route::get('posts/{id?}/edit', 'PostsController@edit');
                      Route::post('posts/{id}/edit', 'PostsControleer@update');

                      Route::get('categories', 'CategoriesController@index');
                      Route::get('categories/create', 'CategoriesController@create');
                      Route::post('categories/create', 'CategoriesController@store');
                    });

