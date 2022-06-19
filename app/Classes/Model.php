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

    // auto switch to actual Model's table before invoking any crud method
    public function __call($method,$args) 
    {
      // if method exists
      if(method_exists($this, $method)) 
      {
         // if in list of methods where you wanna call
         if(in_array($method, array('save','delete','fetchAll', 'fetch')))
         {
             // call
             $classname = get_class($this); // get child full classname
             if (preg_match('@\\\\([\w]+)$@', $classname, $matches)) {
                 $classname = $matches[1];  // obtain child class' name without namespace
             }
             $tablename = substr($classname, 0, strpos($classname, 'Model'));
             $this->db->table($tablename);
         }

         return call_user_func_array(array($this,$method),$args);
       }
     }
    /*
     ****************************************************
     *  CRUD
     ****************************************************
    */
    // upsert (insert or update)
     private function save($data, $id = null) {
   
        if(is_array($data)) {
            if(!empty($id)) {
                $result = $this->db->update($data, $id);
            } else {
              $result = $this->db->insert($data);
            }
        }

        return $result;
        }
     

     // delete
     private function delete($id) {
        $result = $this->db->delete($id);
        return $result;
     }

     // fetch All
     private function fetchAll() {
        return $this->db->selectAll();
        return $result;
     }
     

     // fetch single
     private function fetch($id) {

        $result = $this->db->select($id);
        return $result;
     }
     
     
     // db queryBuilder getter
     public function db() {
         return $this->db;
     }

     public function getTable() {
        return $this->db->getTable();
     }

     public function table($tablename) {
        $this->db->table($tablename);
     }


}