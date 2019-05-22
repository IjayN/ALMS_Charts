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

Route::get('bootstrap', 'Bootsrap\BootstrapController@index');

Route::get('/', function () {
    return view('auth/login');
});

// Route::get('/', function () {
//     return view('new_password')->middleware('auth');
// });

// Route::get('/', function () {
//     return view('sidebar');
// });

//Route::group([
//    'namespace' => 'Auth',
//    'prefix' => 'auth'],
//    function ()
//{
//    Route::post('authenticate', 'PortalLoginController@authenticate')->name('authenticate');
//});




Route::get('new_password','Auth\PortalLoginController@new_password');
Route::get('recover_password','Auth\PortalLoginController@recover_password')->middleware('passwordrecovery')->name('recover-password');
Route::get('recovery_code/{id}','Auth\PortalLoginController@recovery_code')->middleware('passwordrecovery');


Route::post('authenticate', 'Auth\PortalLoginController@authenticate')->name('authenticate');
Route::post('create_password', 'Auth\PortalLoginController@create_password')->name('create_password');
Route::post('password_recovery', 'Auth\PortalLoginController@password_recovery')->name('password-recovery');
Route::post('verify_code/{id}', 'Auth\PortalLoginController@verify_code')->name('verify-code');


Route::get('/sidebar', 'HomeController@sidebar');
Route::get('/sidebar', 'HomeController@navbar');


Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add-member', 'HomeController@add_member')->name('add-member');
Route::post('/add-employee', 'HomeController@add_employee')->name('add-employee');
Route::get('/manage-members', 'HomeController@manage_members')->name('manage-members');
Route::post('/update_status/{id}','HomeController@updateStatus')->name('update-status');

Route::post('/pw_reset/{id}','HomeController@pw_reset')->name('pw_reset');

Route::post('/edit-member{id}', 'HomeController@edit_member')->name('edit-member');
Route::post('/edit_department/{id}', 'HomeController@edit_department')->name('edit-department');

Route::delete('/delete-member/{id}', 'HomeController@delete_member');

Route::get('/member-edit/{id}', 'HomeController@member_edit');

Route::get('/edit-dept/{id}', 'HomeController@edit_dept');

Route::get('/communication', 'HomeController@communication')->name('communication');
Route::get('/apply-leave', 'HomeController@apply_leave')->name('apply-leave');
Route::get('/choose_reliever', 'HomeController@choose_reliever')->name('choose_reliever');
Route::get('/choose_2relievers', 'HomeController@choose_2relievers')->name('choose_2relievers');
Route::get('/choose_3relievers', 'HomeController@choose_3relievers')->name('choose_3relievers');


Route::post('/applied-leave', 'HomeController@applied_leave');
Route::post('/multiple_relievers', 'HomeController@multiple_relievers')->name('multiple_relievers');

Route::get('/leave-history', 'HomeController@leave_history')->name('leave-history');
Route::get('/visitors', 'HomeController@visitors')->name('visitors');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/account', 'HomeController@account')->name('account');

Route::get('/employees', 'HomeController@employees')->name('employees');
Route::post('/applyLeave', 'LeaveController@applyLeave')->middleware('auth');
Route::get('/department_employees', 'LeaveController@employees_departments')->middleware('auth');
Route::get('/employees', 'LeaveController@employees');
Route::get('/leaveHistory/{id}', 'LeaveController@leaveHistory');
// Route::get('/calculateLeave/{id}', 'LeaveController@calculate_days');
Route::get('/send/email', 'LeaveController@mail');

// Leave Approval
Route::post('/leaveApproval', 'HomeController@leaveApproval')->middleware('auth');
Route::get('/leave-approval', 'HomeController@leave_approval')->middleware('auth');
Route::get('/pending-request','HomeController@pendingRequests')->middleware('auth')->name('pending');
Route::get('/reliever_request','HomeController@relieverRequest')->middleware('auth')->name('reliever_request');
Route::get('/all_request','HomeController@leaveReqeust')->middleware('auth')->name('all_request');
Route::get('/details/{id}','HomeController@pendingRequestDetails')->middleware('auth')->name('details');
//reliver approval
Route::post('/reliever-approve/{id}', 'HomeController@relieverApprove')->middleware('auth')->name('reliever-app');
Route::post('/reliever-reject/{id}', 'HomeController@relieverReject')->middleware('auth')->name('reliever-rej');
Route::get('/re-details/{id}','HomeController@pendingReliverDetails')->middleware('auth')->name('re-details');

//compulsory leave
Route::get('/comp-leave','HomeController@compLeave')->middleware('auth')->name('com-leave');
Route::get('/comp-details/{id}','HomeController@compDetails')->middleware('auth')->name('com-details');
//FORCED LEAVES ACCESSED BY HR
Route::post('/create/forced/leave/{id}', 'ForcedLeaveC@createForcedLeave')->middleware('auth')->name('force-leave');
Route::get('/active/forced/leaves', 'ForcedLeaveC@activeForcedLeaves')->middleware('auth')->name('all-active');
Route::get('/all/forced/leaves', 'ForcedLeaveC@allForcedLeaves')->middleware('auth')->name('all-comp_leave');
Route::post('/deactivate/forced/leave/{id}', 'ForcedLeaveC@deactivateForcedLeave')->middleware('auth')->name('deactivate');
//


Route::post('/leave-approve/{id}', 'HomeController@leaveApproval')->middleware('auth')->name('leave-app');
Route::post('/leave-reject/{id}', 'HomeController@leaveReject')->middleware('auth')->name('leave->rej');

// visitors
Route::post('/visitor', 'VisitorController@new_visitor');
Route::get('/visitorList', 'VisitorController@get_visitor');

//FCM
Route::get('/test-push', 'FCM\PushNotificationsController@test');
Route::get('send-sms', 'SMSTest@sendSms');
