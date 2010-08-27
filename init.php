<?php

require_once __DIR__ . '/lib/vendor/doctrine-orm/lib/vendor/doctrine-common/lib/Doctrine/Common/ClassLoader.php';

$classLoader = new \Doctrine\Common\ClassLoader('Doctrine\ORM', __DIR__ . '/lib/vendor/doctrine-orm/lib');
$classLoader->register();

$classLoader = new \Doctrine\Common\ClassLoader('Doctrine\DBAL', __DIR__ . '/lib/vendor/doctrine-orm/lib/vendor/doctrine-dbal/lib');
$classLoader->register();

$classLoader = new \Doctrine\Common\ClassLoader('Doctrine\Common', __DIR__ . '/lib/vendor/doctrine-orm/lib/vendor/doctrine-common/lib');
$classLoader->register();

$classLoader = new \Doctrine\Common\ClassLoader('Symfony', __DIR__ . '/lib/vendor/doctrine-orm/lib/vendor');
$classLoader->register();

require __DIR__ . '/cli-config.php';
