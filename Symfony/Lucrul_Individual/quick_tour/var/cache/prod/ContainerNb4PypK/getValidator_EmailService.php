<?php

namespace ContainerNb4PypK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getValidator_EmailService extends App_KernelProdContainer
{
    /*
     * Gets the private 'validator.email' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator('html5');
    }
}
