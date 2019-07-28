<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/blog/lister' => [[['_route' => 'blog_list', '_controller' => 'App\\Controller\\BlogController::list'], null, ['GET' => 0], null, false, false, null]],
        '/blog/add' => [[['_route' => 'blog_add', '_controller' => 'App\\Controller\\BlogController::add'], null, ['POST' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction'], null, null, null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/blog/(?'
                    .'|trouver/([^/]++)(?'
                        .'|(*:70)'
                        .'|(*:77)'
                    .')'
                    .'|effacer/([^/]++)(*:101)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        70 => [[['_route' => 'blogbyid', '_controller' => 'App\\Controller\\BlogController::trouver'], ['id'], ['GET' => 0], null, false, true, null]],
        77 => [[['_route' => 'blogbyauthor', '_controller' => 'App\\Controller\\BlogController::dioxma'], ['author'], ['GET' => 0], null, false, true, null]],
        101 => [
            [['_route' => 'blogdinid', '_controller' => 'App\\Controller\\BlogController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
