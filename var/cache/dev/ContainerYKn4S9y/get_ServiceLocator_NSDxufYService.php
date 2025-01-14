<?php

namespace ContainerYKn4S9y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NSDxufYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NSDxufY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NSDxufY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\AdminController::activite' => ['privates', '.service_locator.7hqb68K', 'get_ServiceLocator_7hqb68KService', true],
            'App\\Controller\\AdminController::add_service' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\AdminController::admin_dashboard_client_findAll' => ['privates', '.service_locator.kPUOGb8', 'get_ServiceLocator_KPUOGb8Service', true],
            'App\\Controller\\AdminController::admin_dashboard_client_id_delete' => ['privates', '.service_locator.zr5vmE8', 'get_ServiceLocator_Zr5vmE8Service', true],
            'App\\Controller\\AdminController::admin_dashboard_edit' => ['privates', '.service_locator.qVbMq4y', 'get_ServiceLocator_QVbMq4yService', true],
            'App\\Controller\\AdminController::consulterforfait' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\AdminController::deleteActivite' => ['privates', '.service_locator.TegUmo4', 'get_ServiceLocator_TegUmo4Service', true],
            'App\\Controller\\AdminController::delete_service' => ['privates', '.service_locator.iI.dCs.', 'get_ServiceLocator_II_DCs_Service', true],
            'App\\Controller\\ClientController::accessCard' => ['privates', '.service_locator.VZYzWW3', 'get_ServiceLocator_VZYzWW3Service', true],
            'App\\Controller\\ClientController::dashboard' => ['privates', '.service_locator.qVbMq4y', 'get_ServiceLocator_QVbMq4yService', true],
            'App\\Controller\\ClientController::pay' => ['privates', '.service_locator.V71r_w4', 'get_ServiceLocator_V71rW4Service', true],
            'App\\Controller\\PublicController::contact' => ['privates', '.service_locator.uVvF4gL', 'get_ServiceLocator_UVvF4gLService', true],
            'App\\Controller\\PublicController::services' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\PublicController::timeComponentTable' => ['privates', '.service_locator.uxkYj8G', 'get_ServiceLocator_UxkYj8GService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.jpvOrpT', 'get_ServiceLocator_JpvOrpTService', true],
            'App\\Controller\\RegistrationController::verifyUserEmail' => ['privates', '.service_locator.920S.Ym', 'get_ServiceLocator_920S_YmService', true],
            'App\\Controller\\ResetPasswordController::request' => ['privates', '.service_locator.EE0.cm9', 'get_ServiceLocator_EE0_Cm9Service', true],
            'App\\Controller\\ResetPasswordController::reset' => ['privates', '.service_locator.Z9ydiC1', 'get_ServiceLocator_Z9ydiC1Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\SecurityController::loginUser' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\AdminController:activite' => ['privates', '.service_locator.7hqb68K', 'get_ServiceLocator_7hqb68KService', true],
            'App\\Controller\\AdminController:add_service' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\AdminController:admin_dashboard_client_findAll' => ['privates', '.service_locator.kPUOGb8', 'get_ServiceLocator_KPUOGb8Service', true],
            'App\\Controller\\AdminController:admin_dashboard_client_id_delete' => ['privates', '.service_locator.zr5vmE8', 'get_ServiceLocator_Zr5vmE8Service', true],
            'App\\Controller\\AdminController:admin_dashboard_edit' => ['privates', '.service_locator.qVbMq4y', 'get_ServiceLocator_QVbMq4yService', true],
            'App\\Controller\\AdminController:consulterforfait' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\AdminController:deleteActivite' => ['privates', '.service_locator.TegUmo4', 'get_ServiceLocator_TegUmo4Service', true],
            'App\\Controller\\AdminController:delete_service' => ['privates', '.service_locator.iI.dCs.', 'get_ServiceLocator_II_DCs_Service', true],
            'App\\Controller\\ClientController:accessCard' => ['privates', '.service_locator.VZYzWW3', 'get_ServiceLocator_VZYzWW3Service', true],
            'App\\Controller\\ClientController:dashboard' => ['privates', '.service_locator.qVbMq4y', 'get_ServiceLocator_QVbMq4yService', true],
            'App\\Controller\\ClientController:pay' => ['privates', '.service_locator.V71r_w4', 'get_ServiceLocator_V71rW4Service', true],
            'App\\Controller\\PublicController:contact' => ['privates', '.service_locator.uVvF4gL', 'get_ServiceLocator_UVvF4gLService', true],
            'App\\Controller\\PublicController:services' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\PublicController:timeComponentTable' => ['privates', '.service_locator.uxkYj8G', 'get_ServiceLocator_UxkYj8GService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.jpvOrpT', 'get_ServiceLocator_JpvOrpTService', true],
            'App\\Controller\\RegistrationController:verifyUserEmail' => ['privates', '.service_locator.920S.Ym', 'get_ServiceLocator_920S_YmService', true],
            'App\\Controller\\ResetPasswordController:request' => ['privates', '.service_locator.EE0.cm9', 'get_ServiceLocator_EE0_Cm9Service', true],
            'App\\Controller\\ResetPasswordController:reset' => ['privates', '.service_locator.Z9ydiC1', 'get_ServiceLocator_Z9ydiC1Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\SecurityController:loginUser' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\AdminController::activite' => '?',
            'App\\Controller\\AdminController::add_service' => '?',
            'App\\Controller\\AdminController::admin_dashboard_client_findAll' => '?',
            'App\\Controller\\AdminController::admin_dashboard_client_id_delete' => '?',
            'App\\Controller\\AdminController::admin_dashboard_edit' => '?',
            'App\\Controller\\AdminController::consulterforfait' => '?',
            'App\\Controller\\AdminController::deleteActivite' => '?',
            'App\\Controller\\AdminController::delete_service' => '?',
            'App\\Controller\\ClientController::accessCard' => '?',
            'App\\Controller\\ClientController::dashboard' => '?',
            'App\\Controller\\ClientController::pay' => '?',
            'App\\Controller\\PublicController::contact' => '?',
            'App\\Controller\\PublicController::services' => '?',
            'App\\Controller\\PublicController::timeComponentTable' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\RegistrationController::verifyUserEmail' => '?',
            'App\\Controller\\ResetPasswordController::request' => '?',
            'App\\Controller\\ResetPasswordController::reset' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SecurityController::loginUser' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AdminController:activite' => '?',
            'App\\Controller\\AdminController:add_service' => '?',
            'App\\Controller\\AdminController:admin_dashboard_client_findAll' => '?',
            'App\\Controller\\AdminController:admin_dashboard_client_id_delete' => '?',
            'App\\Controller\\AdminController:admin_dashboard_edit' => '?',
            'App\\Controller\\AdminController:consulterforfait' => '?',
            'App\\Controller\\AdminController:deleteActivite' => '?',
            'App\\Controller\\AdminController:delete_service' => '?',
            'App\\Controller\\ClientController:accessCard' => '?',
            'App\\Controller\\ClientController:dashboard' => '?',
            'App\\Controller\\ClientController:pay' => '?',
            'App\\Controller\\PublicController:contact' => '?',
            'App\\Controller\\PublicController:services' => '?',
            'App\\Controller\\PublicController:timeComponentTable' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\RegistrationController:verifyUserEmail' => '?',
            'App\\Controller\\ResetPasswordController:request' => '?',
            'App\\Controller\\ResetPasswordController:reset' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SecurityController:loginUser' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
