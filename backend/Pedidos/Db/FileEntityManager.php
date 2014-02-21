<?php
namespace Pedidos\Db;

/**
 * Description of FileEntityManager
 *
 * @author tulio
 */
class FileEntityManager implements EntityManager{

    /**
     * @var array
     */
    private $persistedObjects = array();

    /**
     * @var array
     */
    private $cache = array();

    /**
     * Path to storage files directory.
     * @var string
     */
    private $storagePath;

    /**
     * 
     * @param string $storagePath
     */
    public function __construct($storagePath) {
        $this->storagePath = $storagePath;
    }

    /**
     * 
     * @param string entityName
     * @param string $id
     */
    public function findAll($entityName) {
        $items = $this->load($entityName);
        
        $entities = array();
        foreach ($items as $item) {
                $entity = $this->populate($entityName, $item);
                $entities[] = $entity;
        }

        return $entities;
    }
    
    /**
     * 
     * @param string entityName
     * @param string $id
     */
    public function find($entityName, $id) {
        $items = $this->load($entityName);

        foreach ($items as $item) {
            if ($item['id'] == $id) {
                $entity = $this->populate($entityName, $item);
                return $entity;
            }
        }

        return false;
    }

    /**
     * 
     * @param object $entity
     */
    public function persist($entity) {
        $this->persistedObjects[] = $entity;
    }

    public function flush() {
        /**
         * Obtains an object class name without namespaces
         */
        function get_real_class($obj) {
            $classname = get_class($obj);

            if (preg_match('@\\\\([\w]+)$@', $classname, $matches)) {
                $classname = $matches[1];
            }

            return $classname;
        }

        foreach ($this->persistedObjects as $entity) {
            $item = array();
            $entityName = get_real_class($entity);
            $items = $this->load($entityName);
            $methods = get_class_methods(get_class($entity));
            foreach ($methods as $method) {
                if (preg_match('@^(get)([\w]+)$@', $method)) {
                    $property = lcfirst(str_replace('get', '', $method));
                    $item[$property] = $entity->$method();
                }
            }
        }
        foreach ($items as $key => $existingItem) {
            if ($item['id'] == $existingItem['id']) {
                $items[$key] = $item;
                $found = true;
            }
        }

        if(!$found) $items[] = $item;

        $this->store($entityName, $items);
    }

    /**
     * 
     * @param object $entity
     */
    public function remove($entity) {
        
    }

    /**
     * 
     * @param string $entityName
     * @return array
     * @throws \Exception
     */
    private function load($entityName) {
        if (isset($this->cache[$entityName])) {
            return $this->cache[$entityName];
        }

        $filePath = $this->storagePath . DIRECTORY_SEPARATOR . $entityName . '.json';
        if(file_exists($filePath) === true) {
            $items = json_decode(file_get_contents($filePath), true);
        } else {
            throw new \Exception('Arquivo de armazenamento para entidade '.$entityName.' não encontrado.');
        }

        return $items;
    }

    /**
     * 
     * @param string $entityName
     * @param array $item
     */
    private function populate($entityName, array $item) {
        $className = '\\Pedidos\\Model\\'.$entityName;

        if (class_exists($className) === false) {
            throw new \Exception('Classe de entidade '.$className.' não existe.');
        }

        $entity = new $className();

        foreach ($item as $column => $value) {
            $method = 'set'.strtoupper($column);
            $entity->$method($value);
        }

        return $entity;
    }

    /**
     * 
     * @param string $entityName
     * @param array $items
     */
    public function store ($entityName, $items) {
        $filePath = $this->storagePath . DIRECTORY_SEPARATOR . $entityName . '.json';
        file_put_contents($filePath, json_encode($items));
    }

}