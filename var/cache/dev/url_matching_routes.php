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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_dashbord', '_controller' => 'App\\Controller\\DashbordController::index'], null, null, null, false, false, null]],
        '/demandeur/index' => [[['_route' => 'demandeur_list', '_controller' => 'App\\Controller\\DemandeurController::index'], null, null, null, false, false, null]],
        '/demandeur/add' => [[['_route' => 'add_demandeur', '_controller' => 'App\\Controller\\DemandeurController::adddemandeur'], null, null, null, false, false, null]],
        '/personne' => [[['_route' => 'personne_list', '_controller' => 'App\\Controller\\PersonneController::index'], null, null, null, true, false, null]],
        '/personne/add' => [[['_route' => 'add_personne', '_controller' => 'App\\Controller\\PersonneController::addPersonne'], null, null, null, false, false, null]],
        '/role/index' => [[['_route' => 'app_role', '_controller' => 'App\\Controller\\RoleController::index'], null, null, null, false, false, null]],
        '/role/add' => [[['_route' => 'add_role', '_controller' => 'App\\Controller\\RoleController::addRole'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/unite' => [[['_route' => 'app_unite', '_controller' => 'App\\Controller\\UniteController::index'], null, null, null, false, false, null]],
        '/unite/add' => [[['_route' => 'add_unite', '_controller' => 'App\\Controller\\UniteController::addPersonne'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/demandeur/(?'
                    .'|(\\d+)(*:221)'
                    .'|delete/([^/]++)(*:244)'
                    .'|update(?:/([^/]++))?(*:272)'
                    .'|all(?:/([^/]++)(?:/([^/]++))?)?(*:311)'
                .')'
                .'|/personne/(?'
                    .'|(\\d+)(*:338)'
                    .'|delete/([^/]++)(*:361)'
                    .'|update(?:/([^/]++))?(*:389)'
                    .'|all(?:/([^/]++)(?:/([^/]++))?)?(*:428)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        221 => [[['_route' => 'detail_demandeur', '_controller' => 'App\\Controller\\DemandeurController::detail'], ['id'], null, null, false, true, null]],
        244 => [[['_route' => 'delete_demandeur', '_controller' => 'App\\Controller\\DemandeurController::deletedemandeur'], ['id'], null, null, false, true, null]],
        272 => [[['_route' => 'update_demandeur', 'id' => '0', '_controller' => 'App\\Controller\\DemandeurController::updatedemandeur'], ['id'], null, null, false, true, null]],
        311 => [[['_route' => 'all_demandeur', 'page' => '1', 'nbre' => '5', '_controller' => 'App\\Controller\\DemandeurController::all'], ['page', 'nbre'], null, null, false, true, null]],
        338 => [[['_route' => 'detail_personne', '_controller' => 'App\\Controller\\PersonneController::detail'], ['id'], null, null, false, true, null]],
        361 => [[['_route' => 'delete_personne', '_controller' => 'App\\Controller\\PersonneController::deletePersonne'], ['id'], null, null, false, true, null]],
        389 => [[['_route' => 'update_personne', 'id' => '0', '_controller' => 'App\\Controller\\PersonneController::updatePersonne'], ['id'], null, null, false, true, null]],
        428 => [
            [['_route' => 'all_personne', 'page' => '1', 'nbre' => '5', '_controller' => 'App\\Controller\\PersonneController::all'], ['page', 'nbre'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
