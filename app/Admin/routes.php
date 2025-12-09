<?php

use App\Admin\Controllers\ExperienceController;
use App\Admin\Controllers\ProjectController;
use App\Admin\Controllers\TechnologyController;
use App\Admin\Controllers\TrainingController;
use App\Admin\Controllers\UserController;
use Illuminate\Routing\Router;


Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('/experiences', ExperienceController::class);
    $router->resource('/users', UserController::class);
    $router->resource('/technologies', TechnologyController::class);
    $router->resource('/projects', ProjectController::class);
    $router->resource('/trainings', TrainingController::class);

});
