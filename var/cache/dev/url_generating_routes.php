<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app_accueil' => [[], ['_controller' => 'App\\Controller\\AccueilController::index'], [], [['text', '/']], [], [], []],
    'app_event_new' => [[], ['_controller' => 'App\\Controller\\EventController::new'], [], [['text', '/event/new']], [], [], []],
    'app_event_list' => [[], ['_controller' => 'App\\Controller\\EventController::list'], [], [['text', '/events']], [], [], []],
    'app_inscriptions' => [[], ['_controller' => 'App\\Controller\\EventController::inscriptions'], [], [['text', '/inscriptions']], [], [], []],
    'app_event_subscribe' => [['id'], ['_controller' => 'App\\Controller\\EventController::subscribe'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/event/subscribe']], [], [], []],
    'app_event_unsubscribe' => [['id'], ['_controller' => 'App\\Controller\\EventController::unsubscribe'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/event/unsubscribe']], [], [], []],
    'app_profile' => [[], ['_controller' => 'App\\Controller\\ProfileController::index'], [], [['text', '/profile']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_user' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user']], [], [], []],
    'user_update' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/update'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'user_change_password' => [[], ['_controller' => 'App\\Controller\\UserController::changePassword'], [], [['text', '/profile/change-password']], [], [], []],
    'App\Controller\AccueilController::index' => [[], ['_controller' => 'App\\Controller\\AccueilController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\EventController::new' => [[], ['_controller' => 'App\\Controller\\EventController::new'], [], [['text', '/event/new']], [], [], []],
    'App\Controller\EventController::list' => [[], ['_controller' => 'App\\Controller\\EventController::list'], [], [['text', '/events']], [], [], []],
    'App\Controller\EventController::inscriptions' => [[], ['_controller' => 'App\\Controller\\EventController::inscriptions'], [], [['text', '/inscriptions']], [], [], []],
    'App\Controller\EventController::subscribe' => [['id'], ['_controller' => 'App\\Controller\\EventController::subscribe'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/event/subscribe']], [], [], []],
    'App\Controller\EventController::unsubscribe' => [['id'], ['_controller' => 'App\\Controller\\EventController::unsubscribe'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/event/unsubscribe']], [], [], []],
    'App\Controller\ProfileController::index' => [[], ['_controller' => 'App\\Controller\\ProfileController::index'], [], [['text', '/profile']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\UserController::index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user']], [], [], []],
    'App\Controller\UserController::edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/update'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'App\Controller\UserController::changePassword' => [[], ['_controller' => 'App\\Controller\\UserController::changePassword'], [], [['text', '/profile/change-password']], [], [], []],
];
