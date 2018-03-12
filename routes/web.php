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

Route::get('/', function () {
    return view('welcome');
});
 
Auth::routes();
Route::any('/view-done-results/{course}','AdminController@viewDoneResult')->name('viewdoneresults');
Route::any('/show-done-courses','AdminController@showDoneCourses')->name('showdonecourses');
Route::post('/save-added-question/{course_id}','AdminController@saveAddedQuestion')->name('saveaddedquestion');
Route::any('/request-add-questions/{course_id}','AdminController@requestAddQuestions')->name('requestaddquestions');
Route::any('/see-students-record','AdminController@seeStudentsRecords')->name('seerecord');
Route::any('/set-exam-start','AdminController@setExamStart')->name('setexamstart');
Route::any('/monitor-exam','AdminController@MonitorExam')->name('monitorpage');
Route::any('/save-basic-settings','AdminController@setBasicSettings')->name('savebasicsettings');
Route::any('/basic-settings','AdminController@requestBasicSettings')->name('requestbasicsettings');
Route::post('/save-edited-settings/{course_id}','AdminController@SaveEditedCourseSettings')->name('saveeditedcoursesettings');
Route::any('/edit-course-settings/{course_id}','AdminController@showEditCurrentCourseSettings')->name('editcoursesettings');
Route::any('/delete-course/{course_id}','AdminController@DeleteCourse')->name('deletecourse');
Route::post('/save/{ques_id}','AdminController@SaveEditedQuestion')->name('saveeditedquestion');
Route::any('/edit-ques/{ques_id}/{sucess?}','AdminController@showEditQuestion')->name('showeditquestion');
Route::any('/show-course-questions/{course_id}','AdminController@seeAllCourseQuestions')->name('seecoursequestions');
Route::get('/show-all_courses','AdminController@ShowAllCourses')->name('showallcourses');
Route::post('/finish-create-new-course','AdminController@CreateNewCourse')->name('createnewcourse');
Route::get('/create-new-course','AdminController@RequestCreateCourseData')->name('requestcreatecoursedata');
Route::any('/home', 'HomeController@index')->name('home');
Route::any('/exam','ExamsController@index');
Route::any('/exam/exam_intro/{course}','ExamsController@exam_intro');
Route::any('/exam/start/{course}','ExamsController@start');
Route::post('/exam/process','ExamsController@process');
Route::any('/admin','AdminController@index')->name('adminindex');
Route::get('/exam/details/{id}/{created_at?43}','PostExamsController@viewExamsDetails')->name('checkexamdetails');
Route::get('/profiles','ProfileController@index');
Route::get('/createNewBoard','AssistDiscussionBoardController@index')->name('createNewBoard');
Route::post('/discuss/create','DiscussionBoardController@CreatePosts');
Route::get('/discuss/editor','DiscussionBoardController@useAdvancedTextEditor');
Route::post('/discuss/addPosts','DiscussionBoardController@create')->name('addpost');
Route::any('/boards/{board_code?}','DiscussionBoardController@index')->name('boards')->middleware(['checkboardcode','confirmboardcode']);
Route::any('/discuss/like','DiscussionBoardController@Like')->name('like');
Route::post('/discuss/reply','DiscussionBoardController@reply')->name('reply');
Route::any('/create','AssistDiscussionBoardController@createGroup')->name('createGroup');
Route::any('showall_boards','AssistDiscussionBoardController@showAllBoards')->name('showall_boards');
Route::any('board/join/{board_code}','AssistDiscussionBoardController@JoinBoard')->name('joinboard');