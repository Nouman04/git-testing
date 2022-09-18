<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
//check version git --version
// for git use installation use these commands
//1-git init
//2-create file name as .gitignore to ignore all the file you dont want to add in repository
//3-git add . to include files in the coming commit
//4-git commit -m "commit message" to add commit message 