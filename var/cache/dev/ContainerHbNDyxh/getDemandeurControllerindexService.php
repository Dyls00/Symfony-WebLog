<?php

namespace ContainerHbNDyxh;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDemandeurControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jtEnr.g.App\Controller\DemandeurController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jtEnr.g.App\\Controller\\DemandeurController::index()'] = ($container->privates['.service_locator.jtEnr.g'] ?? $container->load('get_ServiceLocator_JtEnr_GService'))->withContext('App\\Controller\\DemandeurController::index()', $container);
    }
}