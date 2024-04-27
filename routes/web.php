<?php

use App\Http\Controllers\PageController;
use App\Models\Menu;
use App\Models\Solution;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index']);
Route::get('/solutions', [PageController::class, 'solutions']);
Route::get('/resources', [PageController::class, 'resources']);
Route::get('/company', [PageController::class, 'company']);
Route::get('/contact-us', [PageController::class, 'contact']);
Route::get('/privacy-policy', [PageController::class, 'privacy']);
Route::get('/terms-of-use', [PageController::class, 'terms']);
