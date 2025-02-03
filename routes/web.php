<?php

use App\Http\Controllers\Controller;
use App\Models\ListedUser;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home',['title' => 'Home', 'listedUsers' => ListedUser::all()]);
});

Route::get('/edit/{listedUser}', function (ListedUser $listedUser) {
    return view('edit', ['title' => 'Edit User', 'user' => $listedUser]);
});
Route::post('/update/{listedUser}', [Controller::class, 'update']);
Route::post('/delete/{listedUser}', [Controller::class, 'delete']);

Route::get('/add', function () {
    return view('add',['title' => 'Add User']);
});
Route::post('/add', [Controller::class, 'add']);
