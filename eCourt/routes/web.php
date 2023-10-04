<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SelectUserForSignup;
use App\Http\Controllers\ThirdPartyController;


Route::get('/',[HomeController ::class,'home'])->name('/');
Route::get('about',[HomeController ::class,'about'])->name('about');
Route::get('contact',[HomeController ::class,'contact'])->name('contact');
Route::get('lawyer-list',[HomeController ::class,'lawyerList'])->name('lawyer.list');

Route::get('sign-up-userselect', [SelectUserForSignup::class, 'selectUser'])->name('signup');
Route::get('sign-up-lawyer', [SelectUserForSignup::class, 'lawyerSignup'])->name('lawyer.signup');
Route::get('sign-up-client', [SelectUserForSignup::class, 'clientSignup'])->name('client.signup');
Route::get('sign-up-thirdparty', [SelectUserForSignup::class, 'thirdpartySignup'])->name('thirdparty.signup');

Route::post('register-lawyerdata', [SignupController::class, 'storeLawyerdata'])->name('register.lawyerdata');
Route::post('register-client', [SignupController::class, 'storeClientdata'])->name('register.clientdata');
Route::post('register-thirdparty', [SignupController::class, 'storeThirdpartydata'])->name('register.thirdpartydata');

Route::get('admin.login',[LoginController ::class,'adminLogin'])->name('admin.login');
Route::get('client-login',[LoginController ::class,'clientLogin'])->name('client.login');
Route::get('lawyer-login',[LoginController ::class,'lawyerLogin'])->name('lawyer.login');
Route::get('thirdparty-login',[LoginController ::class,'thirdpartyLogin'])->name('thirdparty.login');

Route::post('lawyer-dashboard',[LoginController ::class,'doLawyerLogin'])->name('do.lawyer.login');
Route::post('admin-dashboard',[LoginController ::class,'doAdminLogin'])->name('do.admin.login');
Route::post('client-dashboard',[LoginController ::class,'doClientLogin'])->name('do.client.login');
Route::post('thirdparty-dashboard',[LoginController ::class,'doThirdpartyLogin'])->name('do.thirdparty.login');






Route::group(['middleware'=> 'auth:admin'],function(){

    Route::get('admin-dashboard',[AdminController ::class,'dashboard'])->name('admin.dashboard');
    Route::get('casestatus',[AdminController::class,'casestatus'])->name('casestatus');
    Route::get('caseschedule',[AdminController::class,'caseschedule'])->name('caseschedule');
    Route::get('reschedule{id}',[AdminController::class,'reschedule'])->name('reschedule');
    Route::get('clientdetails',[AdminController::class,'clientdetails'])->name('clientdetails');
    Route::get('lawyerdetails',[AdminController::class,'lawyerdetails'])->name('lawyerdetails');
    Route::get('closedcases',[AdminController::class,'closedcases'])->name('closedcases');
    Route::get('closingrequests',[AdminController::class,'closingrequests'])->name('closingrequests');
    Route::get('crimerate', [ChartController::class, 'index'])->name('crimerate');
    Route::get('accept{id}', [ClosingController::class, 'update'])->name('accept');
    // Route::post('store', [ScheduleController::class, 'store'])->name('store');
    Route::post('reschedule{scheduleid}', [ScheduleController::class, 'update'])->name('reschedule');


    Route::get('admin-login',[LogoutController ::class,'adminLogout'])->name('admin.logout');

});

Route::group(['middleware'=> 'auth:lawyer'],function(){

    Route::get('lawyer-dashboard',[LawyerController ::class,'dashboard'])->name('lawyer.dashboard');
    Route::get('lawyer-edit-profile',[LawyerController ::class,'editProfile'])->name('edit.lawyer.profile');
    Route::post('lawyer-update-profile',[LawyerController ::class,'updateProfile'])->name('update.lawyer.profile');
    Route::get('lawyer-case-requests',[LawyerController ::class,'caseRequests'])->name('lawyer.case.requests');
    Route::get('lawyer-accept-case-request/{requestId}',[CaseController ::class,'acceptCaseRequest'])->name('accept.case.request');
    Route::get('lawyer-reject-case-request/{requestId}',[CaseController ::class,'rejectCaseRequest'])->name('reject.case.request');
    Route::get('lawyer-view-casedocuments/{requestId}',[CaseController ::class,'viewCaseDocument'])->name('view.case.documents');
    Route::get('lawyer-download-casedocuments/{caseDocument}',[CaseController ::class,'downloadCaseDocument'])->name('download.case.document');
    Route::get('lawyer-download-casedocuments/{caseDocument}',[CaseController ::class,'iframeView'])->name('docs.iframe.view');
    Route::get('lawyer-active-cases',[LawyerController ::class,'activeCases'])->name('lawyer.active.cases');
    Route::get('lawyer-closed-cases',[LawyerController ::class,'closedCases'])->name('lawyer.closed.cases');
    Route::get('lawyer-closing-requests',[LawyerController ::class,'closingRequests'])->name('lawyer.closing.requests');
    Route::get('lawyer-case-schedule',[LawyerController ::class,'caseSchedule'])->name('lawyer.case.schedule');
    Route::post('lawyer-casereport-upload',[CaseController ::class,'uploadCaseReport'])->name('upload.case.report');
    Route::get('lawyer-view-casereport/{caseId}',[CaseController ::class,'viewCaseReport'])->name('view.uploaded.reports');
    Route::get('lawyer-download-casereport/{caseReport}',[CaseController ::class,'downloadCaseReport'])->name('download.case.reports');
    Route::get('lawyer-view-report/{caseNumber}',[CaseController ::class,'closingCaseReport'])->name('view.case.reports');
    Route::get('lawyer-forward-closing-request/{requestId}', [CaseController::class, 'closeCase'])->name('forward.closing.request');

    Route::get('lawyer-logout',[LogoutController ::class,'lawyerLogout'])->name('lawyer.logout');

});

Route::group(['middleware'=> 'auth:client'],function(){

    Route::get('client-dashboard',[ClientController ::class,'dashboard'])->name('client.dashboard');
    Route::get('client-edit-profile',[ClientController ::class,'editProfile'])->name('edit.client.profile');
    Route::post('client-update-profile',[ClientController ::class,'updateProfile'])->name('update.client.profile');
    Route::get('client-filecase', [ClientController::class, 'fileCase'])->name('client.filecase');
    Route::post('client-submit-case',[ClientController ::class,'storeCase'])->name('submit.filecase');
    Route::get('client-casestatus', [ClientController::class, 'caseStatus'])->name('client.casestatus');
    Route::get('client-caseschedule', [ClientController::class, 'caseSchedule'])->name('client.caseschedule');
    Route::get('client-caseclosing', [ClientController::class, 'caseClosing'])->name('client.caseclosing');
    Route::get('client-closing', [ClientController::class, 'closingRequest'])->name('client.caseclosing.request');
    Route::post('client-caseclosed', [ClientController::class, 'caseClosed'])->name('client.case.closed');

    Route::get('client-logout',[LogoutController ::class,'clientLogout'])->name('client.logout');

});

Route::group(['middleware'=> 'auth:thirdparty'],function(){

    Route::get('thirdparty-dashboard',[ThirdPartyController ::class,'dashboard'])->name('thirdparty.dashboard');
    Route::post('thirdparty-search',[ThirdPartyController ::class,'search'])->name('thirdparty.Search');
    Route::post('thirdparty-report-view',[ThirdPartyController::class,'getReport'])->name('get.casereport');

    Route::get('thirdparty-logout',[LogoutController ::class,'thirdpartyLogout'])->name('thirdparty.logout');
});
