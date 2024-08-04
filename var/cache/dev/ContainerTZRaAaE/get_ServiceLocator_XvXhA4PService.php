<?php

namespace ContainerTZRaAaE;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XvXhA4PService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xvXhA4P' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xvXhA4P'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Controller\\DemandeurController::index' => ['privates', '.service_locator.jtEnr.g.App\\Controller\\DemandeurController::index()', 'getDemandeurControllerindexService', true],
            'App\\Controller\\DemandeurController::adddemandeur' => ['privates', '.service_locator.jtEnr.g.App\\Controller\\DemandeurController::adddemandeur()', 'getDemandeurControlleradddemandeurService', true],
            'App\\Controller\\DemandeurController::detail' => ['privates', '.service_locator.jtEnr.g.App\\Controller\\DemandeurController::detail()', 'getDemandeurControllerdetailService', true],
            'App\\Controller\\DemandeurController::deletedemandeur' => ['privates', '.service_locator.7qj5r0x.App\\Controller\\DemandeurController::deletedemandeur()', 'getDemandeurControllerdeletedemandeurService', true],
            'App\\Controller\\DemandeurController::updatedemandeur' => ['privates', '.service_locator.7qj5r0x.App\\Controller\\DemandeurController::updatedemandeur()', 'getDemandeurControllerupdatedemandeurService', true],
            'App\\Controller\\DemandeurController::all' => ['privates', '.service_locator.jtEnr.g.App\\Controller\\DemandeurController::all()', 'getDemandeurControllerallService', true],
            'App\\Controller\\PersonneController::index' => ['privates', '.service_locator.jtEnr.g.App\\Controller\\PersonneController::index()', 'getPersonneControllerindexService', true],
            'App\\Controller\\PersonneController::addPersonne' => ['privates', '.service_locator.jtEnr.g.App\\Controller\\PersonneController::addPersonne()', 'getPersonneControlleraddPersonneService', true],
            'App\\Controller\\PersonneController::detail' => ['privates', '.service_locator.jtEnr.g.App\\Controller\\PersonneController::detail()', 'getPersonneControllerdetailService', true],
            'App\\Controller\\PersonneController::deletePersonne' => ['privates', '.service_locator.VJk.HBp.App\\Controller\\PersonneController::deletePersonne()', 'getPersonneControllerdeletePersonneService', true],
            'App\\Controller\\PersonneController::updatePersonne' => ['privates', '.service_locator.VJk.HBp.App\\Controller\\PersonneController::updatePersonne()', 'getPersonneControllerupdatePersonneService', true],
            'App\\Controller\\PersonneController::all' => ['privates', '.service_locator.jtEnr.g.App\\Controller\\PersonneController::all()', 'getPersonneControllerallService', true],
            'App\\Controller\\RoleController::index' => ['privates', '.service_locator.Ur9f.YA.App\\Controller\\RoleController::index()', 'getRoleControllerindexService', true],
            'App\\Controller\\RoleController::addRole' => ['privates', '.service_locator.Ur9f.YA.App\\Controller\\RoleController::addRole()', 'getRoleControlleraddRoleService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.mXDaS5b.App\\Controller\\SecurityController::login()', 'getSecurityControllerloginService', true],
            'App\\Controller\\UniteController::index' => ['privates', '.service_locator.jtEnr.g.App\\Controller\\UniteController::index()', 'getUniteControllerindexService', true],
            'App\\Controller\\UniteController::addPersonne' => ['privates', '.service_locator.jtEnr.g.App\\Controller\\UniteController::addPersonne()', 'getUniteControlleraddPersonneService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Controller\\DemandeurController:index' => ['privates', '.service_locator.jtEnr.g.App\\Controller\\DemandeurController::index()', 'getDemandeurControllerindexService', true],
            'App\\Controller\\DemandeurController:adddemandeur' => ['privates', '.service_locator.jtEnr.g.App\\Controller\\DemandeurController::adddemandeur()', 'getDemandeurControlleradddemandeurService', true],
            'App\\Controller\\DemandeurController:detail' => ['privates', '.service_locator.jtEnr.g.App\\Controller\\DemandeurController::detail()', 'getDemandeurControllerdetailService', true],
            'App\\Controller\\DemandeurController:deletedemandeur' => ['privates', '.service_locator.7qj5r0x.App\\Controller\\DemandeurController::deletedemandeur()', 'getDemandeurControllerdeletedemandeurService', true],
            'App\\Controller\\DemandeurController:updatedemandeur' => ['privates', '.service_locator.7qj5r0x.App\\Controller\\DemandeurController::updatedemandeur()', 'getDemandeurControllerupdatedemandeurService', true],
            'App\\Controller\\DemandeurController:all' => ['privates', '.service_locator.jtEnr.g.App\\Controller\\DemandeurController::all()', 'getDemandeurControllerallService', true],
            'App\\Controller\\PersonneController:index' => ['privates', '.service_locator.jtEnr.g.App\\Controller\\PersonneController::index()', 'getPersonneControllerindexService', true],
            'App\\Controller\\PersonneController:addPersonne' => ['privates', '.service_locator.jtEnr.g.App\\Controller\\PersonneController::addPersonne()', 'getPersonneControlleraddPersonneService', true],
            'App\\Controller\\PersonneController:detail' => ['privates', '.service_locator.jtEnr.g.App\\Controller\\PersonneController::detail()', 'getPersonneControllerdetailService', true],
            'App\\Controller\\PersonneController:deletePersonne' => ['privates', '.service_locator.VJk.HBp.App\\Controller\\PersonneController::deletePersonne()', 'getPersonneControllerdeletePersonneService', true],
            'App\\Controller\\PersonneController:updatePersonne' => ['privates', '.service_locator.VJk.HBp.App\\Controller\\PersonneController::updatePersonne()', 'getPersonneControllerupdatePersonneService', true],
            'App\\Controller\\PersonneController:all' => ['privates', '.service_locator.jtEnr.g.App\\Controller\\PersonneController::all()', 'getPersonneControllerallService', true],
            'App\\Controller\\RoleController:index' => ['privates', '.service_locator.Ur9f.YA.App\\Controller\\RoleController::index()', 'getRoleControllerindexService', true],
            'App\\Controller\\RoleController:addRole' => ['privates', '.service_locator.Ur9f.YA.App\\Controller\\RoleController::addRole()', 'getRoleControlleraddRoleService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.mXDaS5b.App\\Controller\\SecurityController::login()', 'getSecurityControllerloginService', true],
            'App\\Controller\\UniteController:index' => ['privates', '.service_locator.jtEnr.g.App\\Controller\\UniteController::index()', 'getUniteControllerindexService', true],
            'App\\Controller\\UniteController:addPersonne' => ['privates', '.service_locator.jtEnr.g.App\\Controller\\UniteController::addPersonne()', 'getUniteControlleraddPersonneService', true],
        ], [
            'kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Controller\\DemandeurController::index' => '?',
            'App\\Controller\\DemandeurController::adddemandeur' => '?',
            'App\\Controller\\DemandeurController::detail' => '?',
            'App\\Controller\\DemandeurController::deletedemandeur' => '?',
            'App\\Controller\\DemandeurController::updatedemandeur' => '?',
            'App\\Controller\\DemandeurController::all' => '?',
            'App\\Controller\\PersonneController::index' => '?',
            'App\\Controller\\PersonneController::addPersonne' => '?',
            'App\\Controller\\PersonneController::detail' => '?',
            'App\\Controller\\PersonneController::deletePersonne' => '?',
            'App\\Controller\\PersonneController::updatePersonne' => '?',
            'App\\Controller\\PersonneController::all' => '?',
            'App\\Controller\\RoleController::index' => '?',
            'App\\Controller\\RoleController::addRole' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UniteController::index' => '?',
            'App\\Controller\\UniteController::addPersonne' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:loadRoutes' => '?',
            'App\\Controller\\DemandeurController:index' => '?',
            'App\\Controller\\DemandeurController:adddemandeur' => '?',
            'App\\Controller\\DemandeurController:detail' => '?',
            'App\\Controller\\DemandeurController:deletedemandeur' => '?',
            'App\\Controller\\DemandeurController:updatedemandeur' => '?',
            'App\\Controller\\DemandeurController:all' => '?',
            'App\\Controller\\PersonneController:index' => '?',
            'App\\Controller\\PersonneController:addPersonne' => '?',
            'App\\Controller\\PersonneController:detail' => '?',
            'App\\Controller\\PersonneController:deletePersonne' => '?',
            'App\\Controller\\PersonneController:updatePersonne' => '?',
            'App\\Controller\\PersonneController:all' => '?',
            'App\\Controller\\RoleController:index' => '?',
            'App\\Controller\\RoleController:addRole' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UniteController:index' => '?',
            'App\\Controller\\UniteController:addPersonne' => '?',
        ]);
    }
}
