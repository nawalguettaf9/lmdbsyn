<?php

namespace Container2WNLvhg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_I_U4gt1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.i.u4gt1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.i.u4gt1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'dm' => ['services', 'doctrine_mongodb.odm.default_document_manager', 'getDoctrineMongodb_Odm_DefaultDocumentManagerService', true],
        ], [
            'dm' => '?',
        ]);
    }
}
