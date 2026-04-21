<?php

use Illuminate\Support\Facades\Route;

// Include admin routes
require base_path('routes/admin.php');

// Include member routes
require base_path('routes/member.php');

Route::get('/', function () {
    return view('welcome');

});
