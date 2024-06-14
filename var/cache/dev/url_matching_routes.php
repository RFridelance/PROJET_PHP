<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/list/user' => [[['_route' => 'app_list_user', '_controller' => 'App\\Controller\\ListUserController::index'], null, null, null, false, false, null]],
        '/product' => [[['_route' => 'app_product', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/product/create' => [[['_route' => 'product_create', '_controller' => 'App\\Controller\\ProductController::create'], null, null, null, false, false, null]],
        '/products' => [[['_route' => 'product_list', '_controller' => 'App\\Controller\\ProductController::list'], null, null, null, false, false, null]],
        '/product/new' => [[['_route' => 'product_new', '_controller' => 'App\\Controller\\ProductController::new'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/user/welcome' => [[['_route' => 'user_greet', '_controller' => 'App\\Controller\\UserController::welcome'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/product/(?'
                    .'|update/([^/]++)(*:69)'
                    .'|delete/([^/]++)(*:91)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        69 => [[['_route' => 'product_update', '_controller' => 'App\\Controller\\ProductController::update'], ['id'], null, null, false, true, null]],
        91 => [
            [['_route' => 'product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
