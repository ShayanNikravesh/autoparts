<?php

use Illuminate\Support\Facades\Route;

//Admin Subdomain
Route::domain('admin.autoparts.test')->middleware('web')->group(base_path('routes/admin.php'));

Route::get('/', function () {
    return view('user.index');
});
