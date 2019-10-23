<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index');

Route::view('/about', 'pages.about');
Route::view('/railway-consultancy', 'pages.railway-consultancy');
Route::view('/feasibility-study-report', 'pages.feasibility-study-report');
Route::view('/rail-traffic-clearance', 'pages.rail-traffic-clearance');
Route::view('/survey-construction-plan', 'pages.survey-construction_plan');
Route::view('/detailed-project-report', 'pages.detailed-project_report');
Route::view('/engineering-scale-plan', 'pages.engineering-scale_plan');
Route::view('/overhead-electrification', 'pages.overhead-electrification');
Route::view('/signaling-telecommunication', 'pages.signaling-telecommunication');
Route::view('/construction-supervision', 'pages.construction-supervision');
Route::view('/3d-mapping-survey', 'pages.3d-mapping-survey');
Route::view('/drone-uav-survey', 'pages.drone-uav-survey');
Route::view('/topographical-survey', 'pages.topographical-survey');
Route::view('/drone-lidar-survey', 'pages.drone-lidar-survey');
Route::view('/infrastructure-survey', 'pages.infrastructure-survey');
Route::view('/renewable-energy-survey', 'pages.renewable-energy-survey');
Route::view('/smart-city-survey', 'pages.smart-city-survey');
Route::view('/agriculture-survey', 'pages.agriculture-survey');
Route::view('/repair_customization', 'pages.repair-customization');
Route::view('/echosounder', 'pages.echosounder');
Route::view('/energy-efficiency-and-power-consultancy', 'pages.energy-efficiency-and-power-consultancy');
Route::view('/energy-audit-service', 'pages.energy-audit-service');
Route::view('/energy-efficiency-consultancy', 'pages.energy-efficiency-consultancy');
Route::view('/energy-management-and-power-cost-reduction', 'pages.energy-management-and-power-cost-reduction');
Route::view('/green-building-consultancy', 'pages.green-building-consultancy');
Route::view('/solar-power-consultancy', 'pages.solar-power-consultancy');
Route::view('/power-cost-reduction', 'pages.power-cost-reduction');
Route::view('/health-safety-and-environment', 'pages.health-safety-and_environment');
Route::view('/maintenance-management-audit', 'pages.maintenance-management-audit');
Route::view('/captive-power-plant', 'pages.captive-power-plant');
Route::view('/third-party-construction-audit', 'pages.third-party-construction-audit');
Route::view('/school-education-consulting', 'pages.school-education-consulting');
Route::view('/school-planning-construction-assistance', 'pages.school-planning-construction-assistance');
Route::view('/affiliation-Legal-assistance', 'pages.affiliation-Legal-assistance');
Route::view('/Marketing&business-development', 'pages.Marketing-business-development');
Route::view('/recruitment&selection-procedure', 'pages.recruitment-selection-procedure');
Route::view('/management-system-consulting', 'pages.management-system-consulting');
Route::view('/value-added-product-strategies', 'pages.value-added-product-strategies');
Route::view('/quality-policy', 'pages.quality-policy');
Route::view('/clients', 'pages.clients');
//Route::view('/third-party-construction-audit', 'LayoutController@third_party_construction_audit');


Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::post('/contact', 'ContactController@store')->name('contact.store');

Route::get('/careers', 'CareersController@index');
Route::get('/job/{job_id}', 'CareersController@jobShow');
Route::post('/job', 'CareersController@jobStore');
Route::post('/job-reply', 'CareersController@jobReplyStore');

Route::get('refreshcaptcha', 'LayoutController@refreshCaptcha');


// //admin section

// Route::get('/contactadmin', 'AdminController@contact');
// Route::get('/career-applicant', 'AdminController@careerapplicant');
// Route::delete('/contactdestroy/{id}', 'AdminController@condestroy');
// Route::delete('/careerappdestroy/{id}', 'AdminController@carappdestroy');
// Route::get('/add-mail-career', 'AdminController@careermail');
// Route::get('/add-mail-career-create', 'AdminController@careermailcreate');
// Route::post('/add-mail-career-store', 'AdminController@careermailstore');
// Route::get('/add-mail-career-edit/{id}', 'AdminController@careermailedit');
// Route::patch('/add-mail-career-update/{id}', 'AdminController@careermailupdate');
// Route::delete('/add-mail-career-delete/{id}', 'AdminController@careermaildelete');
// Route::resource('/news-feed','NewsfeedController');

// Route::resource('/career-post','CareerpostController');