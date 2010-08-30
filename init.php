<?php

require_once __DIR__ . '/lib/vendor/doctrine-orm/lib/vendor/doctrine-common/lib/Doctrine/Common/ClassLoader.php';

// Classloader for Doctrine namespaces

$classLoader = new \Doctrine\Common\ClassLoader('Doctrine\ORM', __DIR__ . '/lib/vendor/doctrine-orm/lib');
$classLoader->register();

$classLoader = new \Doctrine\Common\ClassLoader('Doctrine\DBAL', __DIR__ . '/lib/vendor/doctrine-orm/lib/vendor/doctrine-dbal/lib');
$classLoader->register();

$classLoader = new \Doctrine\Common\ClassLoader('Doctrine\Common', __DIR__ . '/lib/vendor/doctrine-orm/lib/vendor/doctrine-common/lib');
$classLoader->register();

$classLoader = new \Doctrine\Common\ClassLoader('Symfony', __DIR__ . '/lib/vendor/doctrine-orm/lib/vendor');
$classLoader->register();


// Classloader for Entities and Proxies

$classLoader = new \Doctrine\Common\ClassLoader('Entities', __DIR__);
$classLoader->register();

$classLoader = new \Doctrine\Common\ClassLoader('Proxies', __DIR__);
$classLoader->register();


// Doctrine configuration

$config = new \Doctrine\ORM\Configuration();
$config->setMetadataCacheImpl(new \Doctrine\Common\Cache\ArrayCache);
$driverImpl = $config->newDefaultAnnotationDriver(array(__DIR__."/Entities"));
$config->setMetadataDriverImpl($driverImpl);

$config->setProxyDir(__DIR__ . '/Proxies');
$config->setProxyNamespace('Proxies');

$connectionOptions = array(
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/database.sqlite',
);

/*
$connectionOptions = array(
    'driver' => 'pdo_mysql',
    'dbname' => 'doctrine_test',
    'user' => 'root',
    'password' => '',
    'charset' => 'utf-8',
);
*/


// Entity Manager

$em = \Doctrine\ORM\EntityManager::create($connectionOptions, $config);
//$em->getEventManager()->addEventSubscriber(new \Doctrine\DBAL\Event\Listeners\MysqlSessionInit('utf8', 'utf8_unicode_ci'));

