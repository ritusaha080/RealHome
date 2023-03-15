<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\ProtectAdminRoutes;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PostSettingsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [AuthController::class, 'loginView'])->name('login.view');
Route::get('/signup', [AuthController::class, 'signUpView'])->name('signup.view');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::post('/signup',[AuthController::class,'signUp'])->name('signup');

Route::get('/logout',[AuthController::class,'logout'])->name('logout');


//->middleware([ProtectAdminRoutes::class])

Route::middleware(['auth'])->group(function(){

Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');

Route::get('/admin/allBlog',[BlogCategoryController::class,'index'])->name('admin.blog.index');
// Blog
Route::get('/admin/post',[BlogCategoryController::class,'index1'])->name('admin.post');
Route::post('/admin/get',[BlogCategoryController::class,'Post'])->name('admin.blog.post');
Route::get('/admin/get/form',[BlogCategoryController::class,'PostAdd'])->name('admin.add.newblog');
Route::get('/list/allPost',[BlogCategoryController::class,'show'])->name('post.list.all');
//property
Route::get('/property/details',[PropertyController::class,'property'])->name('property.view');
Route::post('/property/details/form',[PropertyController::class,'PostProperty'])->name('property.post');
Route::get('/property/list',[PropertyController::class,'PropertyList'])->name('property.list');

//property edit,delete
Route::post('property/delete', [PropertyController::class, 'delete_post'])->name('property.delete');
Route::get('property/edit/{id}', [PropertyController::class, 'edit_post'])->name('property.edit');
Route::post('property/update/{id}', [PropertyController::class, 'edit_submit'])->name('property.update');


//category
Route::get('/category/details',[CategoryController::class,'Category'])->name('category.view');
Route::post('/category/details/form',[CategoryController::class,'PostCategory'])->name('category.post');
Route::get('/category/list',[CategoryController::class,'CategoryList'])->name('category.list');


//blog edit,delete

Route::post('/delete', [BlogCategoryController::class, 'delete_post'])->name('post.delete');
Route::get('/edit/{id}', [BlogCategoryController::class, 'edit_post'])->name('post.edit');
Route::post('/edit/{id}', [BlogCategoryController::class, 'edit_submit'])->name('post.update');

//settings

Route::get('/settings/details',[PostSettingsController::class,'settings'])->name('settings.view');
Route::post('/settings/details/form',[PostSettingsController::class,'postSettings'])->name('settings.post');
Route::get('/settingsy/list',[PostSettingsController::class,'settingsList'])->name('settings.list');


Route::get('/settings-view',[PostSettingsController::class,'settingsView'])->name('settings.settingsView');
Route::post('/settings-save',[PostSettingsController::class,'settingsSave'])->name('settings.settingsSave');

});

