<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/**/

Route::get('/', function () {
    return view('kanun.index');
});

Route::get('/team', function () {
    return view('kanun.team');
});

Route::get('/single', function () {
    return view('kanun.single');
});

Route::get('/service', function () {
    return view('kanun.service');
});

Route::get('/portfolio', function () {
    return view('kanun.portfolio');
});

Route::get('/contact', function () {
    return view('kanun.contact');
});

Route::get('/blog', function () {
    return view('kanun.blog');
});

Route::get('/about', function () {
    return view('kanun.about');
});


Route::get('/lowyer', function () {
    return view('panel.lawyer');
});

Route::get('/cases', function () {
    return view('panel.cases');
});

Route::get('/sidebar', [App\Http\Controllers\HomeController::class, 'sidebar'])->name('sidebar');

Route::get('/ajaxpuro', [App\Http\Controllers\HomeController::class, 'ajaxpuro'])->name('ajaxpuro');
Route::post('/ajaxpuro', [App\Http\Controllers\HomeController::class, 'pajaxpuro'])->name('ajaxpuro');

// this is the route I will make it to return JSON data
Route::post("/form-submit", function (Request $request) {
 

    return response()->json([
        "status" => "success",
        "message" => "A terefa deu certo / ".$request->name,
        "resposta" => $request->name,
        "ailo" => $request->ailo
    ]);

})->name('form-submit');

Route::post('/addAjaxLawyer', [App\Http\Controllers\HomeController::class, 'addAjaxLawyer'])->name('addAjaxLawyer');

Route::post('/addAjaxParticip', [App\Http\Controllers\HomeController::class, 'addAjaxParticip'])->name('addAjaxParticip');

Route::post('/addAjaxCostumer', [App\Http\Controllers\HomeController::class, 'addAjaxCostumer'])->name('addAjaxCostumer');

Route::post('/addAjaxIntegrant', [App\Http\Controllers\HomeController::class, 'addAjaxIntegrant'])->name('addAjaxIntegrant');

Route::post('/addConsult', [App\Http\Controllers\HomeController::class, 'addConsult'])->name('addConsult');

Route::post('/addAjaxType', [App\Http\Controllers\HomeController::class, 'addAjaxType'])->name('addAjaxType');
Route::get('/schedule', [App\Http\Controllers\HomeController::class, 'schedule'])->name('schedule');

Route::get('/listConsult', [App\Http\Controllers\HomeController::class, 'listConsult'])->name('listConsult');
Route::get('/listProcess', [App\Http\Controllers\HomeController::class, 'listProcess'])->name('listProcess');
Route::get('/listEmployes', [App\Http\Controllers\HomeController::class, 'listEmployes'])->name('listEmployes');
Route::get('/addEmployee', [App\Http\Controllers\HomeController::class, 'addEmployee'])->name('addEmployee');


// Route::view('/{path?}','app');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/testando', [App\Http\Controllers\HomeController::class, 'testando'])->name('testando');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
