<?php

namespace ContainerNb4PypK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGreetingGeneratorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\GreetingGenerator' shared autowired service.
     *
     * @return \App\GreetingGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\GreetingGenerator'] = new \App\GreetingGenerator(($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));
    }
}