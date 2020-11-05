<?php

namespace ContainerFfaHaeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Action_DocumentationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'api_platform.action.documentation' shared service.
     *
     * @return \ApiPlatform\Core\Documentation\Action\DocumentationAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Documentation'.\DIRECTORY_SEPARATOR.'Action'.\DIRECTORY_SEPARATOR.'DocumentationAction.php';

        return $container->services['api_platform.action.documentation'] = new \ApiPlatform\Core\Documentation\Action\DocumentationAction(($container->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), '', '', '0.0.0', NULL, $container->parameters['api_platform.swagger.versions']);
    }
}
