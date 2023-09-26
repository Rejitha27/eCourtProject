<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\CaseFilingController;
use App\Http\Controllers\ThirdPartyController;

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
Route::get('/',[HomeController ::class,'home'])->name('/');
Route::get('about',[HomeController ::class,'about'])->name('about');
Route::get('contact',[HomeController ::class,'contact'])->name('contact');
Route::get('lawyer-list',[HomeController ::class,'lawyerList'])->name('lawyer.list');

Route::get('signup',[HomeController ::class,'signUp'])->name('signup');
Route::post('home',[SignupController ::class,'store'])->name('do.signup');


Route::get('admin.login',[LoginController ::class,'adminLogin'])->name('admin.login');
Route::get('client-login',[LoginController ::class,'clientLogin'])->name('client.login');
Route::get('lawyer-login',[LoginController ::class,'lawyerLogin'])->name('lawyer.login');
Route::get('thirdparty-login',[LoginController ::class,'thirdpartyLogin'])->name('thirdparty.login');


Route::post('lawyer-dashboard',[LoginController ::class,'doLawyerLogin'])->name('do.lawyer.login');
Route::post('admin-dashboard',[LoginController ::class,'doAdminLogin'])->name('do.admin.login');
Route::post('client-dashboard',[LoginController ::class,'doClientLogin'])->name('do.client.login');
Route::post('thirdparty-dashboard',[LoginController ::class,'doThirdpartyLogin'])->name('do.thirdparty.login');


Route::get('admin-login',[LogoutController ::class,'adminLogout'])->name('admin.logout');
Route::get('client-logout',[LogoutController ::class,'clientLogout'])->name('client.logout');
Route::get('lawyer-logout',[LogoutController ::class,'lawyerLogout'])->name('lawyer.logout');
Route::get('thirdparty-logout',[LogoutController ::class,'thirdpartyLogout'])->name('thirdparty.logout');


Route::get('lawyer-dashboard',[LawyerController ::class,'dashboard'])->name('lawyer.dashboard');
Route::get('lawyer-edit-profile/{lawyerId}',[LawyerController ::class,'editProfile'])->name('edit.lawyer.profile');
Route::get('lawyer-view-profile/{lawyerId}',[LawyerController ::class,'viewProfile'])->name('view.lawyer.profile');
Route::post('lawyer-update-profile',[LawyerController ::class,'updateProfile'])->name('update.lawyer.profile');


Route::get('lawyer-active-cases/{lawyerName}',[LawyerController ::class,'activeCases'])->name('lawyer.active.cases');
Route::get('lawyer-closed-cases/{lawyerName}',[LawyerController ::class,'closedCases'])->name('lawyer.closed.cases');
Route::get('lawyer-case-requests/{lawyerName}',[LawyerController ::class,'caseRequests'])->name('lawyer.case.requests');
Route::get('lawyer-closing-requests',[LawyerController ::class,'closingRequests'])->name('lawyer.closing.requests');
Route::get('lawyer-case-schedule',[LawyerController ::class,'caseSchedule'])->name('lawyer.case.schedule');


Route::post('lawyer-casereport-upload',[CaseController ::class,'uploadCaseReport'])->name('upload.case.report');
Route::get('lawyer-view-casereport/{caseId}',[CaseController ::class,'viewCaseReport'])->name('view.uploaded.reports');
Route::get('lawyer-download-casereport/{caseReport}',[CaseController ::class,'downloadCaseReport'])->name('download.case.reports');


Route::get('client-casefilling',[CaseFilingController ::class,'caseForm'])->name('client.case.form');
Route::post('client-caserequest',[CaseFilingController ::class,'create'])->name('client.case.request');
Route::get('client-filecase', [CaseFilingController::class, 'caseForm'])->name('filecase');

Route::get('lawyer-view-casedocuments/{requestId}',[CaseController ::class,'viewCaseDocument'])->name('view.case.documents');
Route::get('lawyer-download-casedocuments/{caseDocument}',[CaseController ::class,'downloadCaseDocument'])->name('download.case.documents');
Route::get('lawyer-accept-case-request/{requestId}',[CaseController ::class,'acceptCaseRequest'])->name('accept.case.request');
Route::get('lawyer-reject-case-request/{requestId}',[CaseController ::class,'rejectCaseRequest'])->name('reject.case.request');



Route::get('thirdparty-dashboard',[ThirdPartyController ::class,'dashboard'])->name('thirdparty.dashboard');
Route::post('thirdparty-search',[ThirdPartyController ::class,'search'])->name('thirdparty.Search');
Route::get('thirdparty-report-view',[ThirdPartyController::class,'getReport'])->name('get.casereport');


Route::get('client-dashboard',[ClientController ::class,'dashboard'])->name('client.dashboard');
Route::get('client-view-profile',[ClientController ::class,'viewProfile'])->name('view.client.profile');
Route::get('client-edit-profile',[ClientController ::class,'updateProfile'])->name('edit.client.profile');

Route::post('client-close', [ClientController::class, 'close'])->name('close');
Route::get('client-create', [ClientController::class, 'create'])->name('create');
Route::get('client-selectlawyer', [ClientController::class, 'selectLawyer'])->name('selectLawyer');
Route::get('client-scheduling', [ClientController::class, 'scheduling'])->name('scheduling');
Route::get('client-casestatus', [ClientController::class, 'casestatus'])->name('casestatus');
Route::get('client-closerequest', [ClientController::class, 'closerequest'])->name('closerequest');
Route::post('client-create',[ClientController::class,'create'])->name('create');
Route::get('client-client',[ClientController::class,'client'])->name('client');
Route::post('client-store', [ClientController::class, 'store'])->name('store');



Route::get('admin-dashboard',[AdminController ::class,'dashboard'])->name('admin.dashboard');
Route::get('Schedule', [AdminController::class, 'schedule'])->name('Schedule');
Route::get('Scheduleform', [AdminController::class, 'scheduleform'])->name('scheduleform');

Route::get('ReScheduleform{caseid}', [AdminController::class, 'rescheduleform'])->name('rescheduleform');
Route::get('closing', [AdminController::class, 'closingrequest'])->name('ClosingRequest');
Route::get('Casestatus', [AdminController::class, 'casestatus'])->name('Casestatus');
Route::get('documentview', [AdminController::class, 'documentview'])->name('DocumentView');
Route::get('client', [AdminController::class, 'clientdetails'])->name('ClientDetail');
Route::get('lawyer', [AdminController::class, 'lawyerdetails'])->name('LawyerDetail');

Route::get('crimerate', [ChartController::class, 'index'])->name('crimerate');
//scheduleformcreate
Route::post('store', [ScheduleController::class, 'store'])->name('store');
Route::post('reschedule{scheduleid}', [ScheduleController::class, 'update'])->name('reschedule');
Route::post('document', [ScheduleController::class, 'show'])->name('document');













