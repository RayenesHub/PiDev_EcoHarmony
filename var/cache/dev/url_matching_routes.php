<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/event' => [[['_route' => 'app_event', '_controller' => 'App\\Controller\\EventController::affiche'], null, null, null, false, false, null]],
        '/eventAdmin' => [[['_route' => 'app_eventAdmin', '_controller' => 'App\\Controller\\EventController::afficheEventAdmin'], null, null, null, false, false, null]],
        '/adminAddEvent' => [[['_route' => 'app_adminAddEvent', '_controller' => 'App\\Controller\\EventController::add'], null, null, null, false, false, null]],
        '/index' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/nappe' => [[['_route' => 'app_nappe', '_controller' => 'App\\Controller\\NappeController::index'], null, null, null, false, false, null]],
        '/participant' => [[['_route' => 'app_participant', '_controller' => 'App\\Controller\\ParticipantController::index'], null, null, null, false, false, null]],
        '/adminAddParticipant' => [[['_route' => 'app_adminAddParticipant', '_controller' => 'App\\Controller\\ParticipantController::adminAdd'], null, null, null, false, false, null]],
        '/puits' => [[['_route' => 'app_puits', '_controller' => 'App\\Controller\\PuitsController::index'], null, null, null, false, false, null]],
        '/jardin' => [[['_route' => 'jardin', '_controller' => 'App\\Controller\\IndexController::indexJardin'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/eventDetails/([^/]++)(*:29)'
                .'|/a(?'
                    .'|d(?'
                        .'|min(?'
                            .'|Delete(?'
                                .'|Event/([^/]++)(*:74)'
                                .'|Participant/([^/]++)(*:101)'
                            .')'
                            .'|Edit(?'
                                .'|Event/([^/]++)(*:131)'
                                .'|Participant/([^/]++)(*:159)'
                            .')'
                        .')'
                        .'|dParticipant/([^/]++)(*:190)'
                    .')'
                    .'|fficherParticipant/([^/]++)(*:226)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:266)'
                    .'|wdt/([^/]++)(*:286)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:332)'
                            .'|router(*:346)'
                            .'|exception(?'
                                .'|(*:366)'
                                .'|\\.css(*:379)'
                            .')'
                        .')'
                        .'|(*:389)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'app_eventDetails', '_controller' => 'App\\Controller\\EventController::details'], ['id'], null, null, false, true, null]],
        74 => [[['_route' => 'app_adminDeleteEvent', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], null, null, false, true, null]],
        101 => [[['_route' => 'app_adminDeleteParticipant', '_controller' => 'App\\Controller\\ParticipantController::delete'], ['id'], null, null, false, true, null]],
        131 => [[['_route' => 'app_adminEditEvent', '_controller' => 'App\\Controller\\EventController::adminEditParticipant'], ['id'], null, null, false, true, null]],
        159 => [[['_route' => 'app_adminEditParticipant', '_controller' => 'App\\Controller\\ParticipantController::adminEditParticipant'], ['id'], null, null, false, true, null]],
        190 => [[['_route' => 'app_addParticipant', '_controller' => 'App\\Controller\\ParticipantController::add'], ['id'], null, null, false, true, null]],
        226 => [[['_route' => 'app_afficherParticipant', '_controller' => 'App\\Controller\\ParticipantController::afficherParticipant'], ['id'], null, null, false, true, null]],
        266 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        286 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        332 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        346 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        366 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        379 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        389 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
