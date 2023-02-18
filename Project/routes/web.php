<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuitarsController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LoginController::class, 'index'])->name('login.index');
Route::get('/dashboard', [HomeController::class, 'index'])->name('home.index');

Route::get('/import-users', [EmployeesController::class, 'importEmployees'])->name('import.index');
Route::post('/upload-users', [EmployeesController::class, 'uploadEmployees'])->name('upload.index');


Route::resource('employees', EmployeesController::class);
























/* VIDEO TUTORIAL PRACTISE */

//GET Method --- URL String - 'index' = Name of method - Name of route = 'home.index' = *use name of controller and name of method (needs to be unique)
//Route::get('/welcome', [HomeController::class, 'index'])->name('home.index'); 
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

//Resoruce Method --- Creates routes using method names automatically 'guitars' = URL string prefix E.G guitars/create
Route::resource('guitars', GuitarsController::class);



// BASIC GET request for URL - Executes function, passes string of 'Welcome' and returns view 'Welcome' (home page)
/* Route::get('/', function () {
    return view('welcome');
}); 

// Returns just string - Even when there is no view
/* Route::get('/', function () {
    return '<h1>Hello Test<h1>';
}); 

Route::get('/about', function () {
    return 'about';
});

Route::get('/contact', function () {
    return 'contact';
}); */




// Query String Example
// Using Route Parameters - Wildcards
Route::get('/store/{category?}/{item?}', function($category = null, $item = null){
    
    // No request function needed

    if(isset($category))
    {

        if(isset($item))
        {
            return "You are viewing the store for {$category} for {$item}";
        }


        return 'You are viewing the store for ' . strip_tags($category);
    }

    return 'You are viewing all data';
    
});




// Query String Example 2
//Sanitize input practise
//URL /store?category=guitars
Route::get('/store', function(){

    //Request function - Want to get category string
    $category = request('category');

    //Never trust user input (Sanitise inputs - Strips HTML Tags)
    if(isset($category))
    {
        return 'You are viewing the store for ' . strip_tags($category);
    }

    return 'You are viewing all data';
    
});