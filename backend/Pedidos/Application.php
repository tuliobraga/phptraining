<?php
namespace Pedidos;

/**
 * Description of Application
 *
 * @author tulio
 */
class Application {

    /**
     *
     * @var Application
     */
    private static $instance;

    /**
     *
     * @var \Pedidos\Db\EntityManager
     */
    private $entityManager;

    /**
     * Singleton Pattern
     * 
     * @param \Pedidos\Db\EntityManager $entityManager
     */
    private function __construct() {}

    /**
     * 
     * @return Application
     */
    public static function getInstance() {
        if(self::$instance === null) {
            self::$instance = new Application();
        }

        return self::$instance;
    }

    /**
     * 
     * @return \Pedidos\Db\EntityManager
     */
    public function getEntityManager() {
        return $this->entityManager;
    }

    /**
     * 
     * @param \Pedidos\Db\EntityManager $entityManager
     */
    public function setEntityManager(\Pedidos\Db\EntityManager $entityManager) {
        $this->entityManager = $entityManager;
    }

}