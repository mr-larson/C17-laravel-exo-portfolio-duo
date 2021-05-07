<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BibliothequeController;
use App\Http\Controllers\FactController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\ImageController;
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


//LIVRE
//ALL
Route::get('/livre', [LivreController::class, "index"])->name("livre");

//DELETE
Route::post('/livre/{id}/delete', [LivreController::class, "destroy"]);

//EDIT
Route::get("/livre/{id}/edit",[LivreController::class, "edit"]);

//UPDATE
Route::post("/livre/{id}/update",[LivreController::class, "update"]);

//CREATE
Route::get("livre/create", [LivreController::class, "create"]);

//STORE
Route::post("/livre/store", [LivreController::class, "store"]);


//IMAGE
//ALL
Route::get('/image', [ImageController::class, "index"])->name("image");

//DELETE
Route::post('/image/{id}/delete', [ImageController::class, "destroy"]);

//EDIT
Route::get("/image/{id}/edit",[ImageController::class, "edit"]);

//UPDATE
Route::post("/image/{id}/update",[ImageController::class, "update"]);

//CREATE
Route::get("image/create", [ImageController::class, "create"]);

//STORE
Route::post("/image/store", [ImageController::class, "store"]);


//Fact
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