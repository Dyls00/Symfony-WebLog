<?php

namespace ContainerTUq8MVH;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPersonneControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PersonneController' shared autowired service.
     *
     * @return \App\Controller\PersonneController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'PersonneController.php';

        $container->services['App\\Controller\\PersonneController'] = $instance = new \App\Controller\PersonneController();

        $instance->setContainer(($container->privates['.service_locator.8FV7jiY'] ?? $container->load('get_ServiceLocator_8FV7jiYService'))->withContext('App\\Controller\\PersonneController', $container));

        return $instance;
    }
}
