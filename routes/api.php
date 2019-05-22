<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

require __DIR__ . '/auth/auth.php';
require __DIR__ . '/auth/passwordReset.php';

Route::post('/applyLeave', 'LeaveController@applyLeave')->middleware('auth:api');
Route::post('/multiple_relievers', 'LeaveController@multiple_relievers')->middleware('auth:api');
Route::get('/department_employees', 'LeaveController@employees_departments')->middleware('auth:api');
Route::get('/employees', 'LeaveController@employees');
Route::post('/leaveHistory', 'LeaveController@leaveHistory');
// Route::get('/calculateLeave/{id}', 'LeaveController@calculate_days');
Route::get('/send/email', 'LeaveController@mail');

// Leave Approval
Route::post('/leaveApproval', 'LeaveController@leave_approval')->middleware('auth:api');
Route::get('/leave-approval', 'HomeController@leaveApproval')->middleware('auth:api');

Route::post('/reliever-approve', 'LeaveController@relieverApprove')->middleware('auth:api');
Route::post('/reliever2-approve', 'LeaveController@reliever2Approve')->middleware('auth:api');
Route::post('/reliever3-approve', 'LeaveController@reliever3Approve')->middleware('auth:api');
Route::post('/reliever-reject', 'LeaveController@relieverReject')->middleware('auth:api');
Route::post('/reliever2-reject', 'LeaveController@reliever2Reject')->middleware('auth:api');
Route::post('/reliever3-reject', 'LeaveController@reliever3Reject')->middleware('auth:api');

// visitors
//Route::post('/visitor', 'VisitorController@new_visitor');
//Route::post('/visitorList', 'VisitorController@get_visitor');
Route::post('/pm-approve', 'LeaveController@pmApprove')->middleware('auth:api');
Route::post('/pm-reject', 'LeaveController@pmReject')->middleware('auth:api');
//hod
Route::post('/hod-approve', 'LeaveController@hodApprove')->middleware('auth:api');
Route::post('/hod-reject', 'LeaveController@hodReject')->middleware('auth:api');

Route::post('/hr-approve', 'LeaveController@hrApprove')->middleware('auth:api');
Route::post('/hr-reject', 'LeaveController@hrReject')->middleware('auth:api');

/*
 * MD Approve and Reject Leave
 */
Route::post('/md-approve', 'LeaveController@mdApprove')->middleware('auth:api');
Route::post('/md-reject', 'LeaveController@mdReject')->middleware('auth:api');

/*
 * Reliever Requests
 */
Route::get('/reliever-requests', 'RelieverController@relieverRequests')->middleware('auth:api');
Route::get('/reliever2-requests', 'RelieverController@reliever2Requests')->middleware('auth:api');
Route::get('/reliever3-requests', 'RelieverController@reliever3Requests')->middleware('auth:api');



/*
 *  Api End Points 19/01/19
 */
Route::get('employees', 'EmployeeController@index')->middleware('auth:api');
//MD Leave Requests
Route::get('md/leave/requests', 'LeaveController@mdLeaveRequests')->middleware('auth:api');
//Md Pending Leave Requests
Route::get('md/pending-leave/requests', 'LeaveController@mdPendingLeaveRequests')->middleware('auth:api');


//Create Visitors
Route::post('create/visitor', 'VisitorController@createVisitor')->middleware('auth:api');
//Upload Visitor Image
Route::post('upload/visitor/image', 'VisitorController@uploadVisitorImage')->middleware('auth:api');
//Search Visitor
Route::post('search/visitor', 'VisitorController@searchVisitor')->middleware('auth:api');
//List all Visitors
Route::get('all/visitors', 'VisitorController@visitors')->middleware('auth:api');
//my visitors
Route::get('my_visitors', 'VisitsController@my_visitors')->middleware('auth:api');


//Create a new Visit
Route::post('create/visit', 'VisitsController@newVisit')->middleware('auth:api');
//List All Visits
Route::get('visits', 'VisitsController@visits')->middleware('auth:api');

/*
 *  22/1/2019
 */
//Employee(s) leave Days

//employee leave days
Route::post('employee/leave/days', 'LeaveDaysController@employeeLeaveDays')->middleware('auth:api');
//employees leave days
Route::get('employees/leave/days', 'LeaveDaysController@employeesLeaveDays')->middleware('auth:api');
//reset employee leave days
Route::post('employee/reset/leave/days', 'LeaveDaysController@resetEmployeeLeaveDays')->middleware('auth:api');
//reset all employees leave days
Route::get('employees/reset/leave/days', 'LeaveDaysController@resetEmployeesLeaveDays')->middleware('auth:api');

//HR AND HOD PENDING & LEAVE REQUESTS Filtered by departments


//hod Leave Requests
Route::get('hod/leave/requests', 'LeaveController@hodLeaveRequests')->middleware('auth:api');
//hod Pending Leave Requests
Route::get('hod/pending-leave/requests', 'LeaveController@hodPendingRequests')->middleware('auth:api');
//hod rejected Leave Requests
Route::get('hod/rejected-leave/requests', 'LeaveController@hodRejectedRequests')->middleware('auth:api');
//pm Pending Leave Requests
Route::get('pm/pending-leave/requests', 'LeaveController@pmPendingRequests')->middleware('auth:api');
//pm rejected Leave Requests
Route::get('pm/rejected-leave/requests', 'LeaveController@pmRejectedRequests')->middleware('auth:api');
//hr Leave Requests
Route::get('hr/leave/requests', 'LeaveController@hrLeaveRequests')->middleware('auth:api');
//hr Pending Leave Requests
Route::get('hr/pending-leave/requests', 'LeaveController@hrPendingRequests')->middleware('auth:api');



//FORCED LEAVES ACCESSED BY HR
Route::post('create/forced/leave', 'ForcedLeave@createForcedLeave')->middleware('auth:api');
Route::get('all/forced/leaves', 'ForcedLeave@forcedLeaves')->middleware('auth:api');
Route::get('active/forced/leaves', 'ForcedLeave@activeForcedLeaves')->middleware('auth:api');
Route::post('deactivate/forced/leave', 'ForcedLeave@deactivateForcedLeave')->middleware('auth:api');

Route::post('auth/update-push-token', 'Auth\AuthController@updateToken');
