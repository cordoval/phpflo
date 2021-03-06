<?php
require_once __DIR__.'/../vendor/symfony/Component/ClassLoader/UniversalClassLoader.php';

$loader = new Symfony\Component\ClassLoader\UniversalClassLoader();
$loader->registerNamespace('PhpFlo', __DIR__.'/../src');
$loader->registerNamespace('PhpFlo\Tests', __DIR__);
$loader->registerNamespace('Evenement', __DIR__.'/../vendor/Evenement/src');
$loader->registerNamespace('Evenement\Tests', __DIR__.'/../vendor/Evenement/tests');
$loader->register();
