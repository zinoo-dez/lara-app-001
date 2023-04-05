<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/tests', [TestController::class, 'index']);
Route::get('/homes', [HomeController::class, 'index'])->name('homes.index')->middleware('age_check:17');
Route::get('/abouts', [AboutController::class, 'index'])->name('abouts.index');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');

Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');
Route::get('/todos/create', [TodoController::class, 'create'])->name('todos.create');
Route::get('/todos/{id}', [TodoController::class, 'show'])->name('todos.show');
Route::post('/todos', [TodoController::class, 'store'])->name('todos.store');


// Route::get('/user/{name}', function (string $name) {
//     // must be charactor
//     return "helo name is $name";
// })->where('name', '[A-Za-z]+');

// Route::get('/user/{id}', function (string $id) {
//     // must be number
//     return "my user id is $id";
// })->where('id', '[0-9]+');

// Route::get('/user/{id}/{name}', function (string $id, string $name) {
//     return "user $id name is $name";
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);


// typehint(string, int)
// Route::get("/user/{id?}", function (string $id = "guest") {
//     return "user " . $id;
// });
// Route::get("/post/{id?}/comment/{commentid}", function (string $id = "100", string $commentid) {
//     return "comment $commentid form post $id";
// });

// Route::get('/home', function () {
//     return view('home');
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/project', function () {
//     return view('project');
// });