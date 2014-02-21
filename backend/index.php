<?php
require_once 'autoloader.php';
$ds = DIRECTORY_SEPARATOR;
$storagePath = realpath(dirname(__FILE__) . $ds .'storage');
$entityManager = new \Pedidos\Db\FileEntityManager($storagePath);

$application = \Pedidos\Application::getInstance();
$application->setEntityManager($entityManager);

require_once 'routes.php';
require_once 'router.php';