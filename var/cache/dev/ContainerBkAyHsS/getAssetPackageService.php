<?php

namespace ContainerBkAyHsS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetPackageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Asset\AssetPackage' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Asset\AssetPackage
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Asset/AssetPackage.php';

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Asset\\AssetPackage'] = new \EasyCorp\Bundle\EasyAdminBundle\Asset\AssetPackage(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));
    }
}
