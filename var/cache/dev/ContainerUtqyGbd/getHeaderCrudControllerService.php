<?php

namespace ContainerUtqyGbd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHeaderCrudControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\HeaderCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\HeaderCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AbstractCrudController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/HeaderCrudController.php';

        $container->services['App\\Controller\\Admin\\HeaderCrudController'] = $instance = new \App\Controller\Admin\HeaderCrudController();

        $instance->setContainer(($container->privates['.service_locator.ZP92gqz'] ?? $container->load('get_ServiceLocator_ZP92gqzService'))->withContext('App\\Controller\\Admin\\HeaderCrudController', $container));

        return $instance;
    }
}
