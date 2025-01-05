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
        '/admin/dashboard/consulterforfait' => [[['_route' => 'consulterforfait', '_controller' => 'App\\Controller\\AdminController::consulterforfait'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::admin'], null, null, null, true, false, null]],
        '/admin/dashboard/horaire' => [[['_route' => 'consulterhoraire', '_controller' => 'App\\Controller\\AdminController::horaire'], null, null, null, false, false, null]],
        '/admin/dashboard/clients' => [[['_route' => 'app_admin_dashboard_client', '_controller' => 'App\\Controller\\AdminController::admin_dashboard_client'], null, null, null, false, false, null]],
        '/admin/dashboard/add' => [[['_route' => 'app_admin_dashboard_add', '_controller' => 'App\\Controller\\AdminController::admin_dashboard_add'], null, null, null, false, false, null]],
        '/admin/add_service' => [[['_route' => 'add_service', '_controller' => 'App\\Controller\\AdminController::add_service'], null, null, null, false, false, null]],
        '/success' => [[['_route' => 'success', '_controller' => 'App\\Controller\\ClientController::success'], null, null, null, false, false, null]],
        '/payment' => [[['_route' => 'app_pay', '_controller' => 'App\\Controller\\ClientController::pay'], null, null, null, false, false, null]],
        '/error' => [[['_route' => 'error', '_controller' => 'App\\Controller\\ClientController::error'], null, null, null, false, false, null]],
        '/services' => [[['_route' => 'app_services', '_controller' => 'App\\Controller\\PublicController::services'], null, null, null, false, false, null]],
        '/team' => [[['_route' => 'app_team', '_controller' => 'App\\Controller\\PublicController::team'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\PublicController::home'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\PublicController::contact'], null, null, null, false, false, null]],
        '/timetable' => [[['_route' => 'app_timetable', '_controller' => 'App\\Controller\\PublicController::timetable'], null, null, null, false, false, null]],
        '/time-table' => [[['_route' => 'app_time_table', '_controller' => 'App\\Controller\\PublicController::timeComponentTable'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login/user' => [[['_route' => 'app_login_user', '_controller' => 'App\\Controller\\SecurityController::loginUser'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/login/admin' => [[['_route' => 'app_login_admin', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'test', '_controller' => 'App\\Controller\\TestController::test'], null, null, null, false, false, null]],
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
                .'|/a(?'
                    .'|dmin/d(?'
                        .'|ashboard/(?'
                            .'|activite(?'
                                .'|(?:/(\\d{1,2}))?(*:254)'
                                .'|/(\\d{1,2})/delete(*:279)'
                            .')'
                            .'|client/(?'
                                .'|findAll(?:/(\\d+)(?:/(\\d+))?)?(*:327)'
                                .'|([^/]++)(?'
                                    .'|(*:346)'
                                    .'|/(?'
                                        .'|edit(*:362)'
                                        .'|delete(*:376)'
                                    .')'
                                .')'
                            .')'
                            .'|edit(?:/([^/]++))?(*:405)'
                        .')'
                        .'|elete_service/([^/]++)(*:436)'
                    .')'
                    .'|ccessCard/([^/]++)(*:463)'
                .')'
                .'|/user/dashboard/([^/]++)(*:496)'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:540)'
                .'|/error/([^/]++)/([^/]++)(*:572)'
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
        254 => [[['_route' => 'consulteractivite', 'id' => '0', '_controller' => 'App\\Controller\\AdminController::activite'], ['id'], null, null, false, true, null]],
        279 => [[['_route' => 'delete_activite', 'id' => '0', '_controller' => 'App\\Controller\\AdminController::deleteActivite'], ['id'], null, null, false, false, null]],
        327 => [[['_route' => 'app_admin_dashboard_client_findAll', 'nbPers' => 15, 'nbPage' => 1, '_controller' => 'App\\Controller\\AdminController::admin_dashboard_client_findAll'], ['nbPers', 'nbPage'], null, null, false, true, null]],
        346 => [[['_route' => 'app_admin_dashboard_client_id', '_controller' => 'App\\Controller\\AdminController::admin_dashboard_client_id'], ['id'], null, null, false, true, null]],
        362 => [[['_route' => 'app_admin_dashboard_client_id_edit', 'id' => '0', '_controller' => 'App\\Controller\\AdminController::admin_dashboard_client_id_edit'], ['id'], null, null, false, false, null]],
        376 => [[['_route' => 'app_admin_dashboard_client_id_delete', '_controller' => 'App\\Controller\\AdminController::admin_dashboard_client_id_delete'], ['id'], null, null, false, false, null]],
        405 => [[['_route' => 'app_admin_dashboard_edit', 'id' => '0', '_controller' => 'App\\Controller\\AdminController::admin_dashboard_edit'], ['id'], null, null, false, true, null]],
        436 => [[['_route' => 'delete_service', '_controller' => 'App\\Controller\\AdminController::delete_service'], ['id'], null, null, false, true, null]],
        463 => [[['_route' => 'app_user_accesscard', '_controller' => 'App\\Controller\\ClientController::accessCard'], ['id'], null, null, false, true, null]],
        496 => [[['_route' => 'app_user_dashboard', '_controller' => 'App\\Controller\\ClientController::dashboard'], ['id'], null, null, false, true, null]],
        540 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        572 => [
            [['_route' => 'error_custom', '_controller' => 'App\\Controller\\TestController::errorPageCustom'], ['statuscode', 'statustext'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
