<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/categories' => [[['_route' => 'categories', '_controller' => 'App\\Controller\\CategoryController::index'], null, null, null, false, false, null]],
        '/category' => [[['_route' => 'create_category', '_controller' => 'App\\Controller\\CategoryController::create'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'products', '_controller' => 'App\\Controller\\ProductController::showAll'], null, null, null, false, false, null]],
        '/products' => [[['_route' => 'tabele', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/product' => [[['_route' => 'create_product', '_controller' => 'App\\Controller\\ProductController::create'], null, null, null, false, false, null]],
        '/form' => [[['_route' => 'app_task_new', '_controller' => 'App\\Controller\\TaskController::new'], null, null, null, false, false, null]],
        '/success' => [[['_route' => 'task_success', '_controller' => 'App\\Controller\\TaskController::success'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/category/(?'
                    .'|([^/]++)(*:190)'
                    .'|edit/([^/]++)(*:211)'
                    .'|remove/([^/]++)(*:234)'
                .')'
                .'|/product/(?'
                    .'|([^/]++)(*:263)'
                    .'|edit/([^/]++)(*:284)'
                    .'|remove/([^/]++)(*:307)'
                .')'
                .'|/api(?'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:351)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:382)'
                        .'|contexts/(.+)(?:\\.([^/]++))?(*:418)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        190 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], null, null, false, true, null]],
        211 => [[['_route' => 'edit_category', '_controller' => 'App\\Controller\\CategoryController::update'], ['id'], null, null, false, true, null]],
        234 => [[['_route' => 'delete_category', '_controller' => 'App\\Controller\\CategoryController::remove'], ['id'], null, null, false, true, null]],
        263 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], null, null, false, true, null]],
        284 => [[['_route' => 'edit_product', '_controller' => 'App\\Controller\\ProductController::update'], ['id'], null, null, false, true, null]],
        307 => [[['_route' => 'delete_product', '_controller' => 'App\\Controller\\ProductController::remove'], ['id'], null, null, false, true, null]],
        351 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        382 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        418 => [
            [['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
