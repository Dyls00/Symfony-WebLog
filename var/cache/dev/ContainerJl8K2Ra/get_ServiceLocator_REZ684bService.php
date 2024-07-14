<?php

namespace ContainerJl8K2Ra;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_REZ684bService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.rEZ684b' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rEZ684b'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\PersonneController::addPersonne' => ['privates', '.service_locator.jtEnr.g.App\\Controller\\PersonneController::addPersonne()', 'getPersonneControlleraddPersonneService', true],
            'App\\Controller\\PersonneController::all' => ['privates', '.service_locator.jtEnr.g.App\\Controller\\PersonneController::all()', 'getPersonneControllerallService', true],
            'App\\Controller\\PersonneController::deletePersonne' => ['privates', '.service_locator.VJk.HBp.App\\Controller\\PersonneController::deletePersonne()', 'getPersonneControllerdeletePersonneService', true],
            'App\\Controller\\PersonneController::detail' => ['privates', '.service_locator.jtEnr.g.App\\Controller\\PersonneController::detail()', 'getPersonneControllerdetailService', true],
            'App\\Controller\\PersonneController::index' => ['privates', '.service_locator.jtEnr.g.App\\Controller\\PersonneController::index()', 'getPersonneControllerindexService', true],
            'App\\Controller\\PersonneController::updatePersonne' => ['privates', '.service_locator.VJk.HBp.App\\Controller\\PersonneController::updatePersonne()', 'getPersonneControllerupdatePersonneService', true],
            'App\\Controller\\RoleController::addRole' => ['privates', '.service_locator.Ur9f.YA.App\\Controller\\RoleController::addRole()', 'getRoleControlleraddRoleService', true],
            'App\\Controller\\RoleController::index' => ['privates', '.service_locator.Ur9f.YA.App\\Controller\\RoleController::index()', 'getRoleControllerindexService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.mXDaS5b.App\\Controller\\SecurityController::login()', 'getSecurityControllerloginService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'App\\Controller\\PersonneController:addPersonne' => ['privates', '.service_locator.jtEnr.g.App\\Controller\\PersonneController::addPersonne()', 'getPersonneControlleraddPersonneService', true],
            'App\\Controller\\PersonneController:all' => ['privates', '.service_locator.jtEnr.g.App\\Controller\\PersonneController::all()', 'getPersonneControllerallService', true],
            'App\\Controller\\PersonneController:deletePersonne' => ['privates', '.service_locator.VJk.HBp.App\\Controller\\PersonneController::deletePersonne()', 'getPersonneControllerdeletePersonneService', true],
            'App\\Controller\\PersonneController:detail' => ['privates', '.service_locator.jtEnr.g.App\\Controller\\PersonneController::detail()', 'getPersonneControllerdetailService', true],
            'App\\Controller\\PersonneController:index' => ['privates', '.service_locator.jtEnr.g.App\\Controller\\PersonneController::index()', 'getPersonneControllerindexService', true],
            'App\\Controller\\PersonneController:updatePersonne' => ['privates', '.service_locator.VJk.HBp.App\\Controller\\PersonneController::updatePersonne()', 'getPersonneControllerupdatePersonneService', true],
            'App\\Controller\\RoleController:addRole' => ['privates', '.service_locator.Ur9f.YA.App\\Controller\\RoleController::addRole()', 'getRoleControlleraddRoleService', true],
            'App\\Controller\\RoleController:index' => ['privates', '.service_locator.Ur9f.YA.App\\Controller\\RoleController::index()', 'getRoleControllerindexService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.mXDaS5b.App\\Controller\\SecurityController::login()', 'getSecurityControllerloginService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
        ], [
            'App\\Controller\\PersonneController::addPersonne' => '?',
            'App\\Controller\\PersonneController::all' => '?',
            'App\\Controller\\PersonneController::deletePersonne' => '?',
            'App\\Controller\\PersonneController::detail' => '?',
            'App\\Controller\\PersonneController::index' => '?',
            'App\\Controller\\PersonneController::updatePersonne' => '?',
            'App\\Controller\\RoleController::addRole' => '?',
            'App\\Controller\\RoleController::index' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\PersonneController:addPersonne' => '?',
            'App\\Controller\\PersonneController:all' => '?',
            'App\\Controller\\PersonneController:deletePersonne' => '?',
            'App\\Controller\\PersonneController:detail' => '?',
            'App\\Controller\\PersonneController:index' => '?',
            'App\\Controller\\PersonneController:updatePersonne' => '?',
            'App\\Controller\\RoleController:addRole' => '?',
            'App\\Controller\\RoleController:index' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
