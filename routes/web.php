<?php

use Illuminate\Support\Facades\Route;

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
//     return view('index');
// });

 Route::get('404', ['as' => 'notfound', 'uses' => 'HomeController@pagenotfound']);
//Route::get('notfound','HomeController@pagenotfound')->name('notfound');

Route::get('/','HomeController@index');
Route::get('home','HomeController@index');
Route::get('about-us','HomeController@about_us');
Route::get('testimonials','HomeController@testimonials');
Route::get('partnership','HomeController@partnership');
Route::get('life-at-deorwine','HomeController@lifeat');
Route::get('career','HomeController@career');
Route::get('contact-us','HomeController@contactus');
Route::get('/career/{slug}', 'HomeController@job');
Route::get('portfolio','PortfolioController@projectlist');
Route::redirect('job-app-solution', 'job-portal-app-development', 301);
Route::redirect('e-learning-solution', 'https://deorwine.com/', 301);
Route::redirect('ui-ux-design', 'https://deorwine.com/', 301);
Route::redirect('responsive-web-design','https://deorwine.com/', 301);
Route::redirect('custom-web-design','https://deorwine.com/', 301);
Route::redirect('augmented-reality-app-development','https://deorwine.com/', 301);
Route::redirect('virtual-reality-app-development','https://deorwine.com/', 301);
Route::redirect('iot-app-development','https://deorwine.com/', 301);
Route::redirect('game-app-development','https://deorwine.com/', 301);
Route::get('/{slug}', 'HomeController@page');


Route::post('contactus_form','HomeController@contactform')->name('contactus_form');
Route::post('footer_form','HomeController@project_enquiry')->name('footer_form');
Route::post('enquire_form','HomeController@enquire_form')->name('enquire_form');
Route::post('solution_form','HomeController@quote_form')->name('solution_form');
Route::post('service_form','HomeController@service_form')->name('service_form');
Route::post('hire_form','HomeController@hire_form')->name('hire_form');
Route::post('consultation_form','HomeController@quote_form')->name('consultation_form');

Route::get('faq/{name}','FaqController@faq')->name('faq');
Route::post('blogdata','HomeController@blogdata')->name('blogdata');
Route::get('project/{pid}','PortfolioController@portfolio')->name('project');
Route::get('thankyou','HomeController@thankyou')->name('thankyou');





//Admin routes
Route::namespace('Admin')->prefix('admin')->group(function () {
Route::get('login','LoginController@showloginform');
Route::post('login', 'LoginController@login')->name('admin.login');
Route::get('dashboard','DashboardController@show')->name('admin.dashboard');
Route::post('logout','LoginController@logout')->name('admin.logout');
Route::get('logout','LoginController@logout');

//Faq manager
Route::get('faqs','FaqController@index')->name('admin.faqs');
Route::get('faq/create','FaqController@create')->name('faq.create');
Route::post('faq/store','FaqController@store')->name('faq.store');
Route::get('faq/show/{id}', 'FaqController@show')->name('faq.show');
Route::get('faq/edit/{id}', 'FaqController@edit')->name('faq.edit');
Route::post('faq/update/{id}','FaqController@update')->name('faq.update');
Route::delete('faq/delete/{id}', 'FaqController@delete')->name('faq.delete');
Route::get('faq/status/{id}/{status}', 'FaqController@status')->name('faq.status');


//Page manager
Route::get('pages','PageController@index')->name('admin.pages');
Route::get('page/create','PageController@create')->name('page.create');
Route::post('page/store','PageController@store')->name('page.store');
Route::get('page/show/{id}', 'PageController@show')->name('page.show');
Route::get('page/edit/{id}', 'PageController@edit')->name('page.edit');
Route::post('page/update/{id}','PageController@update')->name('page.update');
Route::delete('page/delete/{id}', 'PageController@delete')->name('page.delete');

//Inquiry manager
Route::get('inquiry','InquiryController@index')->name('index.inquiry');
Route::get('inquiry/create','InquiryController@create')->name('inquiry.create');
Route::get('inquiry/show/{id}', 'InquiryController@show')->name('inquiry.show');
Route::delete('inquiry/delete/{id}', 'InquiryController@delete')->name('inquiry.delete');



//Job Manager
Route::get('jobs','JobController@index')->name('admin.jobs');
Route::get('job/create','JobController@create')->name('job.create');
Route::post('job/store','JobController@store')->name('job.store');
Route::get('job/show/{id}', 'JobController@show')->name('job.show');
Route::get('job/edit/{id}', 'JobController@edit')->name('job.edit');
Route::post('job/update/{id}','JobController@update')->name('job.update');
Route::delete('job/delete/{id}', 'JobController@delete')->name('job.delete');

});
