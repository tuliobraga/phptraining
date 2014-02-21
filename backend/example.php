<?php
$ds = DIRECTORY_SEPARATOR;
require_once realpath(dirname(__FILE__) . $ds . 'Pedidos'. $ds . 'Application.php');
require_once realpath(dirname(__FILE__) . $ds . 'Pedidos'. $ds . 'Db' . $ds . 'EntityManager.php');
require_once realpath(dirname(__FILE__) . $ds . 'Pedidos'. $ds . 'Db' . $ds . 'FileEntityManager.php');
require_once realpath(dirname(__FILE__) . $ds . 'Pedidos'. $ds . 'Model' . $ds . 'Produto.php');

$storagePath = realpath(dirname(__FILE__) . $ds .'storage');
$entityManager = new \Pedidos\Db\FileEntityManager($storagePath);

$application = \Pedidos\Application::getInstance();
$application->setEntityManager($entityManager);

$produto = new \Pedidos\Model\Produto();
$produto->setDescricao('cadeira de madeira');
$produto->setNome('cadeira 1');
$produto->setPreco(29.90);
$produto->setId(2);

$produto2 = new \Pedidos\Model\Produto();
$produto2->setDescricao('mesa de madeira');
$produto2->setNome('mesa 1');
$produto2->setPreco(99.90);
$produto2->setId(3);

$entityManager->persist($produto);
$entityManager->persist($produto2);
$entityManager->flush();

$produto2 = $entityManager->find('Produto', 2);
var_dump($produto2);