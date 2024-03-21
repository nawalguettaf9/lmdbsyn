<?php

namespace ContainerHWdYb9h;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineMongodb_Messenger_EventSubscriber_DoctrineClearDocumentManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine_mongodb.messenger.event_subscriber.doctrine_clear_document_manager' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Messenger\DoctrineClearEntityManagerWorkerSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Messenger/DoctrineClearEntityManagerWorkerSubscriber.php';

        return $container->privates['doctrine_mongodb.messenger.event_subscriber.doctrine_clear_document_manager'] = new \Symfony\Bridge\Doctrine\Messenger\DoctrineClearEntityManagerWorkerSubscriber(($container->services['doctrine_mongodb'] ?? self::getDoctrineMongodbService($container)));
    }
}
