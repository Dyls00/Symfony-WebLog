<?php

namespace ContainerTZRaAaE;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTurbo_IdAccessorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'turbo.id_accessor' shared service.
     *
     * @return \Symfony\UX\Turbo\Broadcaster\IdAccessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-turbo'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Broadcaster'.\DIRECTORY_SEPARATOR.'IdAccessor.php';

        return $container->privates['turbo.id_accessor'] = new \Symfony\UX\Turbo\Broadcaster\IdAccessor(($container->privates['property_accessor'] ?? self::getPropertyAccessorService($container)), ($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
