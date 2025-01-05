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

##This all are kind of static routing

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