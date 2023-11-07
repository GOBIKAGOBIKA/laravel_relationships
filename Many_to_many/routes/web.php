<?php

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $role = Role::find(1);	
    dd($role->users);
});


Route::get('/create', function () {
$user = User::find(2);
$roleIds = [1, 2];
$user->roles()->attach($roleIds);
return "true";
});