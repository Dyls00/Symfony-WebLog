<?php

namespace ContainerEbaaRGu;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPersonneControlleraddPersonneService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jtEnr.g.App\Controller\PersonneController::addPersonne()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jtEnr.g.App\\Controller\\PersonneController::addPersonne()'] = ($container->privates['.service_locator.jtEnr.g'] ?? $container->load('get_ServiceLocator_JtEnr_GService'))->withContext('App\\Controller\\PersonneController::addPersonne()', $container);
    }
}
