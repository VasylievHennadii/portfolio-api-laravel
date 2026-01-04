<?php


use App\Http\Controllers\Api\ExperienceController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\TechnologyController;
use Illuminate\Support\Facades\Route;

Route::apiResource('/projects', ProjectController::class)
    ->only(['index', 'show'])
    ->parameter('projects', 'project');

Route::apiResource('/experiences', ExperienceController::class)
    ->only(['index', 'show'])
    ->parameter('experiences', 'experience');

Route::apiResource('/technologies', TechnologyController::class)
    ->only(['index', 'show'])
    ->parameter('technologies', 'technology');
