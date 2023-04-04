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
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;

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

// Route::get('/', function () {
//     return view('frontend.index.index')->name('home.page');
// });
Route::get('/login', [AuthController::class, 'loginView'])->name('login.view');
Route::get('/signup', [AuthController::class, 'signUpView'])->name('signup.view');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::post('/signup',[AuthController::class,'signUp'])->name('signup');

Route::get('/logout',[AuthController::class,'logout'])->name('logout');


//->middleware([ProtectAdminRoutes::class])



Route::middleware(['auth'])->group(function(){


    Route::middleware(['IsAdmin'])->group(function (){
        //ADMIN DASHBOARD
        Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');

        //BLOGS
        Route::get('/admin/allBlog',[BlogCategoryController::class,'index'])->name('admin.blog.index');
        Route::get('/admin/post',[BlogCategoryController::class,'index1'])->name('admin.post');
        Route::post('/admin/get',[BlogCategoryController::class,'Post'])->name('admin.blog.post');
        Route::get('/list/allPost',[BlogCategoryController::class,'show'])->name('post.list.all');
        Route::get('/admin/get/form',[BlogCategoryController::class,'PostAdd'])->name('admin.add.newblog');

        //blog edit,delete
        Route::post('/delete', [BlogCategoryController::class, 'delete_post'])->name('post.delete');
        Route::get('/edit/{id}', [BlogCategoryController::class, 'edit_post'])->name('post.edit');
        Route::post('/edit/{id}', [BlogCategoryController::class, 'edit_submit'])->name('post.update');


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

        //settings
//Route::get('/settings/details',[PostSettingsController::class,'settings'])->name('settings.view');
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
        Route::post('/delete-test', [TestimonialController::class, 'delete_Test'])->name('test.delete');
        Route::get('/edit-test/{id}', [TestimonialController::class, 'edit_Test'])->name('test.edit');
        Route::post('/edit-test/{id}', [TestimonialController::class, 'edit_submit'])->name('test.update');

//Faq
        Route::get('/faq-view',[FaqController::class,'faqView'])->name('faq.view');
        Route::post('/faq-save',[FaqController::class,'faqAdd'])->name('faq.save');
        Route::get('/faq-list',[FaqController::class,'list'])->name('faq.list');

//about us
        Route::get('/about-view',[PostSettingsController::class,'aboutView'])->name('about.view');
        Route::post('/about-add',[PostSettingsController::class,'aboutAdd'])->name('about.add');
        Route::get('/about-list',[PostSettingsController::class,'aboutList'])->name('about.list');


//Partners
        Route::get('/partner/details',[PartnerController::class,'partner'])->name('partners.view');
        Route::post('/partner/details/form',[PartnerController::class,'PostPartner'])->name('partners.post');
        Route::get('/partner/list',[PartnerController::class,'partnerList'])->name('partners.list');

//SERVICE SECTION

        Route::get('/service/details',[ServiceController::class,'service'])->name('service.view');
        Route::post('/service/details/form',[ServiceController::class,'postService'])->name('service-post');
        Route::get('/service/list',[ServiceController::class,'serviceList'])->name('service.list');


    });


//user dashboard

    Route::middleware(['IsUser'])->group(function (){
        Route::get('/user/dashboard',[UserController::class,'userDashboard'])->name('user.dashboard');
        //purchased property
        Route::get('/purchased/property',[HomepageController::class,'purchasedProperty'])->name('purchased.property');
        Route::get('/purchased/property-view',[HomepageController::class,'purchasedPropertyview'])->name('purchased.property.view');

    });


//payment
Route::post('/payment/post',[PaymentController::class,'paymentPost'])->name('payment.post');
Route::get('/payment/post',[PaymentController::class,'paymentList'])->name('payment.list');

});




// front end code section

Route::get('/frontend/post',[FrontendController::class,'show'])->name('frontend.post');
Route::get('/frontend/get/{id}',[FrontendController::class,'blog'])->name('frontend.blog.get');
// link with the index page
Route::get('/frontend/post/{id}',[FrontendController::class,'bloglist'])->name('frontend.post.details');

// Home page section

Route::get('/',[HomepageController::class,'homePage'])->name('homepage.get');
//About us
Route::get('/about/get',[HomepageController::class,'about'])->name('about.get');
//Property
Route::get('/property/get',[HomepageController::class,'property'])->name('property.get');
//contact
Route::get('/contact/get',[HomepageController::class,'contact'])->name('contact.view');
//show Property Details
Route::get('/property/details/show/{id}',[HomepageController::class,'propertyShow'])->name('property.details.show');



//property buy
Route::get('property-buy/{id}',[PaymentController::class,'propertyBuy'])->name('property.buy');

Route::get('/payment/show/{id}',[PaymentController::class,'paymentShow'])->name('payment.show');

//blog details show

Route::get('/blog/details/show/{id}',[HomepageController::class,'blogShow'])->name('blog.details');

//contact us post
Route::get('/contact/view',[ContactController::class,'contactView'])->name('contact.view');
Route::post('/contact/post',[ContactController::class,'contactPost'])->name('contact.post');
Route::get('/contact/get',[ContactController::class,'contactList'])->name('contact.list');
