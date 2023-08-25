<?php

use Illuminate\Support\Facades\Route;
use AvatarPHP\Skeleton\Http\Controllers\PostController;

// Entry Route...
Route::get('post', [PostController::class,'index']);
