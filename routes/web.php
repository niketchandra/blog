<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserForm;
use App\Http\Controllers\UserControllerNew;
use App\Http\Controllers\UserProfile;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\PrincipleController;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;
//database Related
use App\Http\Controllers\BasicDbController;
use App\Http\Controllers\StudentInfoController;
//For API
use App\Http\Controllers\HttpClientController;

use App\Http\Controllers\DataDbController;

use App\Http\Controllers\RouteTestController;
use App\Http\Controllers\HttpRequestController;

use App\Http\Controllers\SessionController;
use App\Http\Controllers\SessionFlashKeepController;

use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\AddStudentController;
##This all are kind of static routing

Route::get('/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('home');
});
Route::get('/', function () {
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::view('/blog', 'blog');

Route::redirect('/welcome', '/');  ##Redirect to home page

Route::get('/about', function () {
    return view('about');
});

Route::get('contactus', function () {
    return view('contact');
});

##Dynamic Route
Route::get('about/{name}', function ($name) {
    echo $name;
    return view('dynamic-about', ['name' => $name]);
});

##Call data from controller called as dynamic routing

Route::get('usertest', [UserController::class, 'getUser']);

Route::get('dynamic-user/{name}', [UserController::class, 'aboutUser']);

Route::get('about-page', [UserController::class, 'aboutPage']);

Route::get('admin', [UserController::class, 'adminLogin']);

#  Check if view exists or not
Route::get('support', [UserController::class, 'support']);


Route::view('userform', 'user-form')->name('uf');  ##Name is used to give name to route used in common/header.blade.php
Route::view('userform/{name}', 'user-form');
Route::post('adduser', [UserForm::class, 'userForm']);
Route::view('user', 'user-form-new');
Route::post('adduserdata', [UserControllerNew::class, 'adduserdata']);
Route::view('userprofile/' , 'userprofile')->name('basic');
Route::view('userprofile/{name}' , 'userprofile')->name('pro');
Route::get('basicuserprofile', [UserProfile::class, 'BasicUserProfile'])->name('bup');
Route::get('dunamicuserprofile', [UserProfile::class, 'DynamicUserProfile'])->name('dup');



##Student Route group
Route::prefix('student')->group(function () {
    Route::view('studentadd', 'AddStudent');
    Route::post('addstudent', [AddStudentController::class, 'addStudent']);
    Route::get('studentDetails', [AddStudentController::class, 'list']);
    Route::get('delete/{id}', [AddStudentController::class, 'delete']);
    Route::get('edit/{id}', [AddStudentController::class, 'edit']);
    ################## END data are intract with DB ################
    ################## Below are the dummy view pages ################
    Route::get('dashboard', [StudentController::class, 'dashboard']);
    Route::get('about/{name}', [StudentController::class, 'about']);
    Route::get('profile', [StudentController::class, 'profile']);
});

##Teacher Route grouping with controller
Route::controller(TeacherController::class)->group(function (){
    Route::get('dashboard', 'tdashboard');
    Route::get('about/{name}', 'tabout');
    Route::get('profile', 'tprofile');
});

####Teacher Route grouping with controller for Local Language


##Use middleware from View and Controller
Route::view('principle/about','principle/about')->middleware(AgeCheck::class);
    ## In case you want to use Multiple Middleware
//Route::view('principle/about','principle/about')->middleware([AgeCheck::class,CountryCheck::class]);

    ## Added CheckGroup1 in bootstrap/app.php file
//Route::get('principle/dashboard', [PrincipleController::class, 'dashboard'])->middleware('CheckGroup1');
//Route::get('principle/profile', [PrincipleController::class, 'profile'])->middleware('CheckGroup1');

##Group Route with Middleware
Route::middleware(['CheckGroup1'])->group(function () {
    //Added CheckGroup1 in bootstrap/app.php file
    Route::get('principle/dashboard', [PrincipleController::class, 'dashboard']);
    Route::get('principle/profile', [PrincipleController::class, 'profile']);
});

##Database Related from Controller
Route::get('userdetails', [BasicDbController::class, 'userlist']);
##Database Related from Model
Route::get ('studentdetails', [StudentInfoController::class, 'studentdetails']);
Route::get ('studentinfo', [StudentInfoController::class, 'studentinfo1']);

## Crete Route for API calling from HttpClientController
Route::get ('httpclientshow',[HttpClientController::class, 'getAPIdata']);


##Database Related from Controller
Route::get ('datadb',[DataDbController::class, 'showdata']);
Route::get ('adddata',[DataDbController::class, 'insertdata']);
Route::get ('updatedata',[DataDbController::class, 'updatedata']);
Route::get ('deletedata',[DataDbController::class, 'deletedata']);

//how route work on diffrect route methods (get/post/put/patch/delete)
Route::view ('RouteTest', 'RouteTestView');
Route::get('RouteTestget', [RouteTestController::class, 'get']);
Route::post('RouteTestpost', [RouteTestController::class, 'post']);
Route::put('RouteTestput', [RouteTestController::class, 'put']);
Route::patch('RouteTestpatch', [RouteTestController::class, 'patch']);
Route::delete('RouteTestdelete', [RouteTestController::class, 'delete']);

//how route work on diffrect route methods (ANY/MATCH)

//how HTTP Request work.
Route::view('HttpRequest', 'HttpRequestView');
Route::post('HttpRequestPost', [HttpRequestController::class, 'response']);

//Work on session
Route::view('SessionView','SessionView');
Route::post('SessionViewData', [SessionController::class, 'SessionViewData']);
Route::post('SessionLogin', [SessionController::class, 'SessionLogin']);
Route::view('SessionProfileView', 'SessionProfileView');
Route::get('SessionLogout', [SessionController::class, 'SessionLogout']);

//Work on session flash and Keep
Route::view('SessionFlashKeep', 'SessionFlashKeep');
Route::post('adddata', [SessionFlashKeepController::class, 'flashdata']);

//FileUpload and view Route
Route::view('fileupload', 'FileUpload');
Route::post('upload', [FileUploadController::class, 'upload']);

