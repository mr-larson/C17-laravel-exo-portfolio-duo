<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\FactController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/nav', function () {
    
    return view('nav');
})->name("nav");

Route::get('/footer', function () {
    
    return view('footer');
})->name("footer");

Route::get('/', function () {
    $page="home";
    return view('home', compact("page"));
})->name("home");

Route::get('/backoffice', function () {
    $page="backoffice";
    return view('backoffice', compact("page"));
})->name("backoffice");



//user
//ALL
Route::get('/user', [UserController::class, "index"])->name("user");

//DELETE
Route::post('/user/{id}/delete', [UserController::class, "destroy"]);

//EDIT
Route::get("/user/{id}/edit",[UserController::class, "edit"]);

//UPDATE
Route::post("/user/{id}/update",[UserController::class, "update"]);

//CREATE
Route::get("user/create", [UserController::class, "create"]);

//STORE
Route::post("/user/store", [UserController::class, "store"]);


//ABOUT
//ALL
Route::get('/about', [AboutController::class, "index"])->name("about");

//DELETE
Route::post('/about/{id}/delete', [AboutController::class, "destroy"]);

//EDIT
Route::get("/about/{id}/edit",[AboutController::class, "edit"]);

//UPDATE
Route::post("/about/{id}/update",[AboutController::class, "update"]);

//CREATE
Route::get("about/create", [AboutController::class, "create"]);

//STORE
Route::post("/about/store", [AboutController::class, "store"]);


//SERVICE
//ALL
Route::get('/service', [ServiceController::class, "index"])->name("service");

//DELETE
Route::post('/service/{id}/delete', [ServiceController::class, "destroy"]);

//EDIT
Route::get("/service/{id}/edit",[ServiceController::class, "edit"]);

//UPDATE
Route::post("/service/{id}/update",[ServiceController::class, "update"]);

//CREATE
Route::get("service/create", [ServiceController::class, "create"]);

//STORE
Route::post("/service/store", [ServiceController::class, "store"]);


//PORTFOLIO
//ALL
Route::get('/portfolio', [PortfolioController::class, "index"])->name("portfolio");

//DELETE
Route::post('/portfolio/{id}/delete', [PortfolioController::class, "destroy"]);

//EDIT
Route::get("/portfolio/{id}/edit",[PortfolioController::class, "edit"]);

//UPDATE
Route::post("/portfolio/{id}/update",[PortfolioController::class, "update"]);

//CREATE
Route::get("/portfolio/create", [PortfolioController::class, "create"]);

//STORE
Route::post("/portfolio/store", [PortfolioController::class, "store"]);


//FACT
//ALL
Route::get('/fact', [FactController::class, "index"])->name("fact");

//DELETE
Route::post('/fact/{id}/delete', [FactController::class, "destroy"]);

//EDIT
Route::get("/fact/{id}/edit",[FactController::class, "edit"]);

//UPDATE
Route::post("/fact/{id}/update",[FactController::class, "update"]);

//CREATE
Route::get("fact/create", [FactController::class, "create"]);

//STORE
Route::post("/fact/store", [FactController::class, "store"]);


//SKILL
//ALL
Route::get('/skill', [SkillController::class, "index"])->name("skill");

//DELETE
Route::post('/skill/{id}/delete', [SkillController::class, "destroy"]);

//EDIT
Route::get("/skill/{id}/edit",[SkillController::class, "edit"]);

//UPDATE
Route::post("/skill/{id}/update",[SkillController::class, "update"]);

//CREATE
Route::get("skill/create", [SkillController::class, "create"]);

//STORE
Route::post("/skill/store", [SkillController::class, "store"]);