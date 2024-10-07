<?php

use Illuminate\Support\Facades\Route;

// Route for the homepage
Route::get('/', function () {
    return view('welcome');
});

// Define routes for your existing pages
Route::get('/contractors', function () {
    return view('contractors');
})->name('contractors');

Route::get('/financial-institutions', function () {
    return view('financial-institution');
})->name('financial-institution');

Route::get('/garage-package', function () {
    return view('garage-package');
})->name('garage-package');

Route::get('/grocery-stores', function () {
    return view('grocery-stores');
})->name('grocery-stores');

Route::get('/healthcare', function () {
    return view('healthcare');
})->name('healthcare');

Route::get('/hospitality', function () {
    return view('hospitality');
})->name('hospitality');

Route::get('/landscaping', function () {
    return view('landscaping');
})->name('landscaping');

Route::get('/manufacturing', function () {
    return view('manufacturing');
})->name('manufacturing');

Route::get('/non-profits', function () {
    return view('non-profits');
})->name('non-profits');

// Define routes for new pages
Route::get('/personal-auto', function () {
    return view('personal-auto');
})->name('personal-auto');

Route::get('/professional-liability', function () {
    return view('professional-liability');
})->name('professional-liability');

Route::get('/restaurants', function () {
    return view('restaurants');
})->name('restaurants');

Route::get('/retail', function () {
    return view('retail');
})->name('retail');

Route::get('/schools', function () {
    return view('schools');
})->name('schools');

Route::get('/towing', function () {
    return view('towing');
})->name('towing');

Route::get('/trucking', function () {
    return view('trucking');
})->name('trucking');

Route::get('/wholesale', function () {
    return view('wholesale');
})->name('wholesale');


Route::get('/claims', function () {
    return view('claims');
})->name('claims');

Route::get('/newcontractor', function () {
    return view('newcontractor');
})->name('newcontractor');