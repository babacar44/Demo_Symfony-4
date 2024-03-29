<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'blog_list' => [[], ['_controller' => 'App\\Controller\\BlogController::list'], [], [['text', '/blog/lister']], [], []],
    'blog_add' => [[], ['_controller' => 'App\\Controller\\BlogController::add'], [], [['text', '/blog/add']], [], []],
    'blogbyid' => [['id'], ['_controller' => 'App\\Controller\\BlogController::trouver'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/blog/trouver']], [], []],
    'blogbyauthor' => [['author'], ['_controller' => 'App\\Controller\\BlogController::dioxma'], [], [['variable', '/', '[^/]++', 'author', true], ['text', '/blog/trouver']], [], []],
    'blogdinid' => [['id'], ['_controller' => 'App\\Controller\\BlogController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/blog/effacer']], [], []],
    'easyadmin' => [[], ['_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction'], [], [['text', '/admin/']], [], []],
];
