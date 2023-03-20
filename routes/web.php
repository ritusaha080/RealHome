<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\ProtectAdminRoutes;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PostSettingsController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\TestimonialController;



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

//user dashboard
Route::get('/user/dashboard',[UserController::class,'userDashboard'])->name('user.dashboard');


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

//updated settings
Route::get('/settings-view',[PostSettingsController::class,'settingsView'])->name('settings.settingsView');
Route::post('/settings-save',[PostSettingsController::class,'settingsSave'])->name('settings.settingsSave');


//agents section
Route::get('/agent-view',[AgentController::class,'agentView'])->name('agent.view');
Route::post('/agent-add',[AgentController::class,'agentAdd'])->name('agent.add');
Route::get('/agent-list',[AgentController::class,'agentList'])->name('agent.list');

//testimonials section
Route::get('/testimonial-view',[TestimonialController::class,'testimonialView'])->name('testimonial.view');
Route::post('/testimonial-add',[TestimonialController::class,'testimonialAdd'])->name('testimonial.add');
Route::get('/testimonial-list',[TestimonialController::class,'testimonialList'])->name('testimonial.list');


//Faq
Route::get('/faq-view',[FaqController::class,'faqView'])->name('faq.view');
Route::post('/faq-save',[FaqController::class,'faqAdd'])->name('faq.save');
Route::get('/faq-list',[FaqController::class,'list'])->name('faq.list');
});

//Partners

Route::get('/partner/details',[PartnerController::class,'partner'])->name('partners.view');
Route::post('/partner/details/form',[PartnerController::class,'PostPartner'])->name('partners.post');
Route::get('/partner/list',[PartnerController::class,'partnerList'])->name('partners.list');


// front end code section 

Route::get('/frontend/post',[FrontendController::class,'show'])->name('frontend.post');
Route::get('/frontend/get/{id}',[FrontendController::class,'blog'])->name('frontend.blog.get');
// link with the index page
Route::get('/frontend/post/{id}',[FrontendController::class,'bloglist'])->name('frontend.post.details');

// Home page section

Route::get('/homepage/get',[HomepageController::class,'homePage'])->name('homepage.get');
//About us
Route::get('/about/get',[HomepageController::class,'about'])->name('about.get');
//Property
Route::get('/property/get',[HomepageController::class,'property'])->name('property.get');
//contact
Route::get('/contact/get',[HomepageController::class,'contact'])->name('contact.get');
//show Property Details
Route::get('/property/details/show/{id}',[HomepageController::class,'propertyShow'])->name('property.details.show');


