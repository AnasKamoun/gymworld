<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'consulterforfait' => [[], ['_controller' => 'App\\Controller\\AdminController::consulterforfait'], [], [['text', '/admin/dashboard/consulterforfait']], [], [], []],
    'app_admin' => [[], ['_controller' => 'App\\Controller\\AdminController::admin'], [], [['text', '/admin/']], [], [], []],
    'consulterhoraire' => [[], ['_controller' => 'App\\Controller\\AdminController::horaire'], [], [['text', '/admin/dashboard/horaire']], [], [], []],
    'consulteractivite' => [['id'], ['id' => '0', '_controller' => 'App\\Controller\\AdminController::activite'], ['id' => '\\d{1,2}'], [['variable', '/', '\\d{1,2}', 'id', true], ['text', '/admin/dashboard/activite']], [], [], []],
    'delete_activite' => [['id'], ['id' => '0', '_controller' => 'App\\Controller\\AdminController::deleteActivite'], ['id' => '\\d{1,2}'], [['text', '/delete'], ['variable', '/', '\\d{1,2}', 'id', true], ['text', '/admin/dashboard/activite']], [], [], []],
    'app_admin_dashboard_client' => [[], ['_controller' => 'App\\Controller\\AdminController::admin_dashboard_client'], [], [['text', '/admin/dashboard/clients']], [], [], []],
    'app_admin_dashboard_client_findAll' => [['nbPers', 'nbPage'], ['nbPers' => 15, 'nbPage' => 1, '_controller' => 'App\\Controller\\AdminController::admin_dashboard_client_findAll'], ['nbPers' => '\\d+', 'nbPage' => '\\d+'], [['variable', '/', '\\d+', 'nbPage', true], ['variable', '/', '\\d+', 'nbPers', true], ['text', '/admin/dashboard/client/findAll']], [], [], []],
    'app_admin_dashboard_add' => [[], ['_controller' => 'App\\Controller\\AdminController::admin_dashboard_add'], [], [['text', '/admin/dashboard/add']], [], [], []],
    'app_admin_dashboard_edit' => [['id'], ['id' => '0', '_controller' => 'App\\Controller\\AdminController::admin_dashboard_edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/dashboard/edit']], [], [], []],
    'app_admin_dashboard_client_id' => [['id'], ['_controller' => 'App\\Controller\\AdminController::admin_dashboard_client_id'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/dashboard/client']], [], [], []],
    'app_admin_dashboard_client_id_edit' => [['id'], ['id' => '0', '_controller' => 'App\\Controller\\AdminController::admin_dashboard_client_id_edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/dashboard/client']], [], [], []],
    'app_admin_dashboard_client_id_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminController::admin_dashboard_client_id_delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/dashboard/client']], [], [], []],
    'delete_service' => [['id'], ['_controller' => 'App\\Controller\\AdminController::delete_service'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/delete_service']], [], [], []],
    'add_service' => [[], ['_controller' => 'App\\Controller\\AdminController::add_service'], [], [['text', '/admin/add_service']], [], [], []],
    'success' => [[], ['_controller' => 'App\\Controller\\ClientController::success'], [], [['text', '/success']], [], [], []],
    'app_pay' => [[], ['_controller' => 'App\\Controller\\ClientController::pay'], [], [['text', '/payment']], [], [], []],
    'error' => [[], ['_controller' => 'App\\Controller\\ClientController::error'], [], [['text', '/error']], [], [], []],
    'app_user_dashboard' => [['id'], ['_controller' => 'App\\Controller\\ClientController::dashboard'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/dashboard']], [], [], []],
    'app_user_accesscard' => [['id'], ['_controller' => 'App\\Controller\\ClientController::accessCard'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/accessCard']], [], [], []],
    'app_services' => [[], ['_controller' => 'App\\Controller\\PublicController::services'], [], [['text', '/services']], [], [], []],
    'app_team' => [[], ['_controller' => 'App\\Controller\\PublicController::team'], [], [['text', '/team']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\PublicController::home'], [], [['text', '/']], [], [], []],
    'app_contact' => [[], ['_controller' => 'App\\Controller\\PublicController::contact'], [], [['text', '/contact']], [], [], []],
    'app_timetable' => [[], ['_controller' => 'App\\Controller\\PublicController::timetable'], [], [['text', '/timetable']], [], [], []],
    'app_time_table' => [[], ['_controller' => 'App\\Controller\\PublicController::timeComponentTable'], [], [['text', '/time-table']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'app_forgot_password_request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], [], []],
    'app_check_email' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], [], []],
    'app_reset_password' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], [], []],
    'app_login_user' => [[], ['_controller' => 'App\\Controller\\SecurityController::loginUser'], [], [['text', '/login/user']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_login_admin' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login/admin']], [], [], []],
    'error_custom' => [['statuscode', 'statustext'], ['_controller' => 'App\\Controller\\TestController::errorPageCustom'], [], [['variable', '/', '[^/]++', 'statustext', true], ['variable', '/', '[^/]++', 'statuscode', true], ['text', '/error']], [], [], []],
    'test' => [[], ['_controller' => 'App\\Controller\\TestController::test'], [], [['text', '/test']], [], [], []],
    'App\Controller\AdminController::consulterforfait' => [[], ['_controller' => 'App\\Controller\\AdminController::consulterforfait'], [], [['text', '/admin/dashboard/consulterforfait']], [], [], []],
    'App\Controller\AdminController::admin' => [[], ['_controller' => 'App\\Controller\\AdminController::admin'], [], [['text', '/admin/']], [], [], []],
    'App\Controller\AdminController::horaire' => [[], ['_controller' => 'App\\Controller\\AdminController::horaire'], [], [['text', '/admin/dashboard/horaire']], [], [], []],
    'App\Controller\AdminController::activite' => [['id'], ['id' => '0', '_controller' => 'App\\Controller\\AdminController::activite'], ['id' => '\\d{1,2}'], [['variable', '/', '\\d{1,2}', 'id', true], ['text', '/admin/dashboard/activite']], [], [], []],
    'App\Controller\AdminController::deleteActivite' => [['id'], ['id' => '0', '_controller' => 'App\\Controller\\AdminController::deleteActivite'], ['id' => '\\d{1,2}'], [['text', '/delete'], ['variable', '/', '\\d{1,2}', 'id', true], ['text', '/admin/dashboard/activite']], [], [], []],
    'App\Controller\AdminController::admin_dashboard_client' => [[], ['_controller' => 'App\\Controller\\AdminController::admin_dashboard_client'], [], [['text', '/admin/dashboard/clients']], [], [], []],
    'App\Controller\AdminController::admin_dashboard_client_findAll' => [['nbPers', 'nbPage'], ['nbPers' => 15, 'nbPage' => 1, '_controller' => 'App\\Controller\\AdminController::admin_dashboard_client_findAll'], ['nbPers' => '\\d+', 'nbPage' => '\\d+'], [['variable', '/', '\\d+', 'nbPage', true], ['variable', '/', '\\d+', 'nbPers', true], ['text', '/admin/dashboard/client/findAll']], [], [], []],
    'App\Controller\AdminController::admin_dashboard_add' => [[], ['_controller' => 'App\\Controller\\AdminController::admin_dashboard_add'], [], [['text', '/admin/dashboard/add']], [], [], []],
    'App\Controller\AdminController::admin_dashboard_edit' => [['id'], ['id' => '0', '_controller' => 'App\\Controller\\AdminController::admin_dashboard_edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/dashboard/edit']], [], [], []],
    'App\Controller\AdminController::admin_dashboard_client_id' => [['id'], ['_controller' => 'App\\Controller\\AdminController::admin_dashboard_client_id'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/dashboard/client']], [], [], []],
    'App\Controller\AdminController::admin_dashboard_client_id_edit' => [['id'], ['id' => '0', '_controller' => 'App\\Controller\\AdminController::admin_dashboard_client_id_edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/dashboard/client']], [], [], []],
    'App\Controller\AdminController::admin_dashboard_client_id_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminController::admin_dashboard_client_id_delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/dashboard/client']], [], [], []],
    'App\Controller\AdminController::delete_service' => [['id'], ['_controller' => 'App\\Controller\\AdminController::delete_service'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/delete_service']], [], [], []],
    'App\Controller\AdminController::add_service' => [[], ['_controller' => 'App\\Controller\\AdminController::add_service'], [], [['text', '/admin/add_service']], [], [], []],
    'App\Controller\ClientController::success' => [[], ['_controller' => 'App\\Controller\\ClientController::success'], [], [['text', '/success']], [], [], []],
    'App\Controller\ClientController::pay' => [[], ['_controller' => 'App\\Controller\\ClientController::pay'], [], [['text', '/payment']], [], [], []],
    'App\Controller\ClientController::error' => [[], ['_controller' => 'App\\Controller\\ClientController::error'], [], [['text', '/error']], [], [], []],
    'App\Controller\ClientController::dashboard' => [['id'], ['_controller' => 'App\\Controller\\ClientController::dashboard'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/dashboard']], [], [], []],
    'App\Controller\ClientController::accessCard' => [['id'], ['_controller' => 'App\\Controller\\ClientController::accessCard'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/accessCard']], [], [], []],
    'App\Controller\PublicController::services' => [[], ['_controller' => 'App\\Controller\\PublicController::services'], [], [['text', '/services']], [], [], []],
    'App\Controller\PublicController::team' => [[], ['_controller' => 'App\\Controller\\PublicController::team'], [], [['text', '/team']], [], [], []],
    'App\Controller\PublicController::home' => [[], ['_controller' => 'App\\Controller\\PublicController::home'], [], [['text', '/']], [], [], []],
    'App\Controller\PublicController::contact' => [[], ['_controller' => 'App\\Controller\\PublicController::contact'], [], [['text', '/contact']], [], [], []],
    'App\Controller\PublicController::timetable' => [[], ['_controller' => 'App\\Controller\\PublicController::timetable'], [], [['text', '/timetable']], [], [], []],
    'App\Controller\PublicController::timeComponentTable' => [[], ['_controller' => 'App\\Controller\\PublicController::timeComponentTable'], [], [['text', '/time-table']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\RegistrationController::verifyUserEmail' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'App\Controller\ResetPasswordController::request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], [], []],
    'App\Controller\ResetPasswordController::checkEmail' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], [], []],
    'App\Controller\ResetPasswordController::reset' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], [], []],
    'App\Controller\SecurityController::loginUser' => [[], ['_controller' => 'App\\Controller\\SecurityController::loginUser'], [], [['text', '/login/user']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login/admin']], [], [], []],
    'App\Controller\TestController::errorPageCustom' => [['statuscode', 'statustext'], ['_controller' => 'App\\Controller\\TestController::errorPageCustom'], [], [['variable', '/', '[^/]++', 'statustext', true], ['variable', '/', '[^/]++', 'statuscode', true], ['text', '/error']], [], [], []],
    'App\Controller\TestController::test' => [[], ['_controller' => 'App\\Controller\\TestController::test'], [], [['text', '/test']], [], [], []],
];