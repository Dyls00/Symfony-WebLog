<?php

namespace ContainerPB32pGx;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTurbo_Mercure_Default_BroadcasterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'turbo.mercure.default.broadcaster' shared service.
     *
     * @return \Symfony\UX\Turbo\Bridge\Mercure\Broadcaster
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-turbo'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Broadcaster'.\DIRECTORY_SEPARATOR.'BroadcasterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-turbo'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Bridge'.\DIRECTORY_SEPARATOR.'Mercure'.\DIRECTORY_SEPARATOR.'Broadcaster.php';

        return $container->privates['turbo.mercure.default.broadcaster'] = new \Symfony\UX\Turbo\Bridge\Mercure\Broadcaster('default', ($container->privates['mercure.hub.default.traceable'] ?? self::getMercure_Hub_Default_TraceableService($container)));
    }
}
