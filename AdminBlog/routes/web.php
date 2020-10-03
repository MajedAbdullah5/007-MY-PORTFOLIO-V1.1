<?php

use Illuminate\Support\Facades\Route;

//HomePage
Route::get('/', 'HomeController@homePage');

//Services
Route::get('/services', 'ServiceController@showServicePage');
Route::get('/getServicesList', 'ServiceController@getServicesList');
Route::post('/populateData', 'ServiceController@populateData');
Route::post('/updateServiceData', 'ServiceController@updateServiceData');
Route::post('/deleteServiceData', 'ServiceController@deleteServiceData');
Route::post('/addServices', 'ServiceController@addServices');

//Courses
Route::get('/courses', 'CourseController@showCoursePage');
Route::get('/getCourseList', 'CourseController@getCourseList');
Route::post('/populateCourseId', 'CourseController@populateCourseId');
Route::post('/updateCourseData', 'CourseController@updateCourseData');
Route::post('/courseDelete', 'CourseController@courseDelete');
Route::post('/addCoursesData', 'CourseController@addCoursesData');

//projects
Route::get('/project', 'ProjectController@showProjectPage');
Route::get('/getProjectsList', 'ProjectController@getProjectsList');
Route::post('/populateProjectData', 'ProjectController@populateProjectData');
Route::post('/updateProjectData', 'ProjectController@updateProjectData');
Route::post('/deleteService', 'ProjectController@deleteService');
Route::post('/addproject', 'ProjectController@addproject');

//mesasges
Route::get('/messages', 'MessageController@showMessagePage');
Route::get('/getMessageList', 'MessageController@getMessageList');
Route::post('/deleteMessage', 'MessageController@deleteMessage');

//Portfolio Page---------------------------------------------------------------------------------

//portfolio
Route::get('/portfolio', 'PortfolioController@showPortfolioPage');

//objectives
Route::get('/getObjetiveList', 'PortfolioController@getObjetiveList');
Route::post('/populateObjectives', 'PortfolioController@populateObjectives');
Route::post('/updateObjectives', 'PortfolioController@updateObjectives');

//education
Route::get('/getEducationList', 'PortfolioController@getEducationList');
Route::post('/populateEducationId', 'PortfolioController@populateEducationId');
Route::post('/educationUpdate', 'PortfolioController@educationUpdate');
Route::post('/deleteEducation', 'PortfolioController@deleteEducation');
Route::post('/addEducation', 'PortfolioController@addEducation');

//language
Route::get('/getLanguageList', 'PortfolioController@getLanguageList');
Route::post('/languagePopulateModal', 'PortfolioController@languagePopulateModal');
Route::post('/updateLanguage', 'PortfolioController@updateLanguage');
Route::post('/deleteLanguage', 'PortfolioController@deleteLanguage');
Route::post('/addLanguage', 'PortfolioController@addLanguage');

//skills
Route::get('/getSkillsList', 'PortfolioController@getSkillsList');
Route::post('/populateSkills', 'PortfolioController@populateSkills');
Route::post('/updateSkills', 'PortfolioController@updateSkills');
Route::post('/deleteSkills', 'PortfolioController@deleteSkills');
Route::post('/addSkills', 'PortfolioController@addSkills');

//job skills

Route::get('/getJobSkillsList', 'PortfolioController@getJobSkillsList');
Route::post('/populateJobSkills', 'PortfolioController@populateJobSkills');
Route::post('/updateJobSkills', 'PortfolioController@updateJobSkills');
Route::post('/deleteJobSkills', 'PortfolioController@deleteJobSkills');
Route::post('/addJobSkills', 'PortfolioController@addJobSkills');

//personal information
Route::get('/getPersonalInformationList', 'PortfolioController@getPersonalInformationList');
Route::post('/populatePersonalInformation', 'PortfolioController@populatePersonalInformation');
Route::post('/updatePersonalInformation', 'PortfolioController@updatePersonalInformation');
Route::post('/deletePersonalInformation', 'PortfolioController@deletePersonalInformation');
Route::post('/addPersonalInformation', 'PortfolioController@addPersonalInformation');
