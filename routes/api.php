<?php


use App\Http\Controllers\Api\ExperienceController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\TechnologyController;
use App\Http\Controllers\Api\TrainingController;
use App\Http\Controllers\Api\UserController;
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

Route::apiResource('/users', UserController::class)
    ->only(['index', 'show'])
    ->parameter('users', 'user');

Route::apiResource('/trainings', TrainingController::class)
    ->only(['index', 'show'])
    ->parameter('trainings', 'training');
