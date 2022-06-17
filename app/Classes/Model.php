<?php

namespace Michalkoder\RetaCamada\Classes;
use Michalkoder\RetaCamada\Classes\Database;

class Model 
{

    private $allowedFields = [];
    private $db;

    public function __construct($entity = null) {
        if(isset($entity)) $this->entity = $entity;
        $this->db = Database::getInstance();
        $classname = get_class($this); // get child full classname
        if (preg_match('@\\\\([\w]+)$@', $classname, $matches)) {
            $classname = $matches[1];  // obtain child class' name without namespace
        }
        $tablename = substr($classname, 0, strpos($classname, 'Model'));
        if($tablename) $this->db->table($tablename);
    }
    /*
     ****************************************************
     *  CRUD
     ****************************************************
    */
    // upsert (insert or update)
     public function save($data, $id = null) {
        if(is_array($data)) {
            if(isset($id)) {
                $this->db->update($data, $id);
            } else {
              $this->db->insert($data);
            }
        }
     }

     // delete
     public function delete($id) {
        return $this->db->delete($id);
     }

     // fetch All
     public function fetchAll() {
         return $this->db->selectAll();
     }

     // fetch single
     public function fetch($id) {
         return $this->db->select($id);
     }
     
     // db queryBuilder getter
     public function db() {
         return $this->db;
     }


}