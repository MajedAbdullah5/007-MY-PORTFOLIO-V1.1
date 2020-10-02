<?php

use Illuminate\Support\Facades\Route;
//HomePage
Route::get('/','HomeController@homePage');

//Services
Route::get('/services','ServiceController@showServicePage');
Route::get('/getServicesList','ServiceController@getServicesList');
Route::post('/populateData','ServiceController@populateData');
Route::post('/updateServiceData','ServiceController@updateServiceData');
Route::post('/deleteServiceData','ServiceController@deleteServiceData');
Route::post('/addServices','ServiceController@addServices');

//Courses
Route::get('/courses','CourseController@showCoursePage');
Route::get('/getCourseList','CourseController@getCourseList');
Route::post('/populateCourseId','CourseController@populateCourseId');
Route::post('/updateCourseData','CourseController@updateCourseData');
Route::post('/courseDelete','CourseController@courseDelete');
Route::post('/addCoursesData','CourseController@addCoursesData');

//projects
Route::get('/project','ProjectController@showProjectPage');
Route::get('/getProjectsList','ProjectController@getProjectsList');
Route::post('/populateProjectData','ProjectController@populateProjectData');
Route::post('/updateProjectData','ProjectController@updateProjectData');
Route::post('/deleteService','ProjectController@deleteService');
Route::post('/addproject','ProjectController@addproject');

//mesasges
Route::get('/messages','MessageController@showMessagePage');
Route::get('/getMessageList','MessageController@getMessageList');
Route::post('/deleteMessage','MessageController@deleteMessage');

//Portfolio Page---------------------------------------------------------------------------------

//portfolio
Route::get('/portfolio','PortfolioController@showPortfolioPage');

//objectives
Route::get('/getObjetiveList','PortfolioController@getObjetiveList');
Route::post('/populateObjectives','PortfolioController@populateObjectives');
Route::post('/updateObjectives','PortfolioController@updateObjectives');

//education

