<?php

namespace ContainerPNntRXQ;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPersonneControllerupdatePersonneService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VJk.HBp.App\Controller\PersonneController::updatePersonne()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VJk.HBp.App\\Controller\\PersonneController::updatePersonne()'] = ($container->privates['.service_locator.VJk.HBp'] ?? $container->load('get_ServiceLocator_VJk_HBpService'))->withContext('App\\Controller\\PersonneController::updatePersonne()', $container);
    }
}
