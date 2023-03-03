<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('crm.dashboard');
});
// Route::get('/', function () {
//     return view('crm.sign_in');
// });
Route::get('/dashboard', function () {
    return view('crm.dashboard');
});
Route::get('/project', function () {
    return view('crm.project');
});
Route::get('/contact', function () {
    return view('crm.contact');
});
Route::get('/calendar', function () {
    return view('crm.calendar');
});
Route::get('/side-bar', function () {
    return view('crm.side-bar');
});
Route::get('/Tasks', function () {
    return view('crm.Tasks');
});
Route::get('/user', function () {
    return view('crm.user');
});
Route::get('/Infographic', function () {
    return view('crm.Infographic');
});
Route::get('/inbox', function () {
    return view('crm.inbox');
});
Route::get('/inbox', function () {
    return view('crm.inbox');
});
Route::get('/Gantt_chart', function () {
    return view('crm.Gantt_chart');
});
Route::get('/sign_in', function () {
    return view('crm.sign_in');
});
Route::get('/sign_up', function () {
    return view('crm.sign_up');
});
Route::get('/forgot_Password', function () {
    return view('crm.forgot_Password');
});
