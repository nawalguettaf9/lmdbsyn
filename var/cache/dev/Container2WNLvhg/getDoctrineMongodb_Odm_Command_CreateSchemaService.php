<?php

namespace Container2WNLvhg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineMongodb_Odm_Command_CreateSchemaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine_mongodb.odm.command.create_schema' shared service.
     *
     * @return \Doctrine\Bundle\MongoDBBundle\Command\CreateSchemaDoctrineODMCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/mongodb-odm/lib/Doctrine/ODM/MongoDB/Tools/Console/Command/Schema/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/mongodb-odm/lib/Doctrine/ODM/MongoDB/Tools/Console/Command/CommandCompatibility.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/mongodb-odm/lib/Doctrine/ODM/MongoDB/Tools/Console/Command/Schema/CreateCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/mongodb-odm-bundle/src/Command/CreateSchemaDoctrineODMCommand.php';

        $container->privates['doctrine_mongodb.odm.command.create_schema'] = $instance = new \Doctrine\Bundle\MongoDBBundle\Command\CreateSchemaDoctrineODMCommand();

        $instance->setName('doctrine:mongodb:schema:create');

        return $instance;
    }
}
