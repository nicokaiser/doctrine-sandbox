<?php

require_once __DIR__ . '/lib/vendor/doctrine/lib/Doctrine/Common/ClassLoader.php';

$classLoader = new \Doctrine\Common\ClassLoader('Doctrine', __DIR__ . '/lib/vendor/doctrine/lib');
$classLoader->register();

$classLoader = new \Doctrine\Common\ClassLoader('Symfony', __DIR__ . '/lib/vendor/doctrine/lib/vendor');
$classLoader->register();

require __DIR__ . '/cli-config.php';
