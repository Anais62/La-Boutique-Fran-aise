<?php

namespace ContainerDuqxWk3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\OrderController' shared autowired service.
     *
     * @return \App\Controller\OrderController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\OrderController'] = $instance = new \App\Controller\OrderController(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\OrderController', $container));

        return $instance;
    }
}
