<?php

namespace ContainerDuqxWk3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getValidator_NoSuspiciousCharactersService extends App_KernelProdContainer
{
    /*
     * Gets the private 'validator.no_suspicious_characters' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\NoSuspiciousCharactersValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['validator.no_suspicious_characters'] = new \Symfony\Component\Validator\Constraints\NoSuspiciousCharactersValidator([]);
    }
}
