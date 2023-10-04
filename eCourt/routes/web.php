<?php

use App\Http\Controllers\FileCase;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SelectUserForSignup;

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

Route::get('/', [FrontendController::class, 'home'])->name('/');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/service', [FrontendController::class, 'service'])->name('service');
Route::get('/home', [FrontendController::class, 'home'])->name('home');


Route::post('admin-login', [LoginController::class, 'adminlogin'])->name('admin.login');
Route::post('admin-login-to-profile', [LoginController::class, 'adminloginToProfile'])->name('admin.login.profile');
Route::get('admin-logout',[LoginController ::class,'adminLogout'])->name('admin.Logout');

Route::post('lawyer-login', [LoginController::class, 'lawyerlogin'])->name('lawyer.login');
Route::post('lawyer-login-to-profile', [LoginController::class, 'lawyerloginToProfile'])->name('lawyer.login.profile');
Route::get('lawyer-logout',[LoginController ::class,'lawyerLogout'])->name('lawyer.Logout');

Route::post('client-login', [LoginController::class, 'clientlogin'])->name('client.login');
Route::post('client-login-to-profile', [LoginController::class, 'clientloginToProfile'])->name('client.login.profile');
Route::get('client-logout',[LoginController ::class,'clientLogout'])->name('client.Logout');
Route::post('client-case-file',[FileCase ::class,'clientcaserequest'])->name('client.case.request');



Route::get('sign-up-userselect', [SelectUserForSignup::class, 'selectUser'])->name('select.userfor.signup');


Route::get('lawyer-signup', [SelectUserForSignup::class, 'lawyerSignup'])->name('lawyer.signup');


Route::post('register-lawyerdata', [SignupController::class, 'storeLawyerdata'])->name('register.lawyerdata');



Route::get('sign-up-client', [SelectUserForSignup::class, 'clientSignup'])->name('client.signup');
Route::get('sign-up-thirdparty', [SelectUserForSignup::class, 'thirdpartySignup'])->name('thirdparty.signup');

Route::post('register-client', [SignupController::class, 'storeClientdata'])->name('register.clientdata');
Route::post('register-thirdparty', [SignupController::class, 'storeThirdpartydata'])->name('register.thirdpartydata');

Route::get('thirdparty-login', [LoginController::class, 'thirdpartylogin'])->name('thirdparty.login');
Route::post('thirdparty-login-to-profile', [LoginController::class, 'thirdpartyloginToProfile'])->name('thirdparty.login.profile');
Route::get('thirdparty-logout',[LoginController ::class,'thirdpartyLogout'])->name('thirdparty.Logout');

Route::post('thirdparty-search',[SearchController ::class,'search'])->name('thirdparty.Search');

Route::post('thirdparty-report-view',[SearchController ::class,'getReport'])->name('get.casereport');

?>
