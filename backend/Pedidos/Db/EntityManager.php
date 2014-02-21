<?php
namespace Pedidos\Db;

/**
 * Description of EntityManager
 *
 * @author tulio
 */
interface EntityManager {

    /**
     * 
     * @param string $entityName
     * @param string $id
     * @return $object Entity
     */
    public function find($entityName, $id);

    /**
     * 
     * @param string $entity
     */
    public function persist($entity);

    /**
     * 
     * @param string $entity
     */
    public function remove($entity);

    /**
     * 
     * @return void
     */
    public function flush();

}