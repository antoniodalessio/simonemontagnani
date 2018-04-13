<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'DashboardController@index');

    Route::group([], function ($router) {
        $router->resource('/page', 'PageController');
        $router->resource('/templates', 'TemplatesController');
        $router->resource('/langs', 'LangsController');
        $router->resource('/settings', 'SettingsController');
    });

});
