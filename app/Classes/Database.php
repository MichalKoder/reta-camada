<?php

namespace Michalkoder\RetaCamada\Classes;

use Michalkoder\RetaCamada\Interfaces\Datasource;

/* This is relational database API using PDO and MySQL  */

class Database
{
    private $dbh; // database handle
    public $db; // issue db queries from here
    private static $instance; // singleton instance of this class
    private $table;

    private function __construct() {
         $this->connect();
    }

    // cloning and unserializations are not permitted for singletons
    protected function __clone () {}
    
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize singleton");
    }

    // get singleton instance
    public static function getInstance() {
        if (!isset(self::$instance)) {

            self::$instance = new static();
        }
        return self::$instance;
    }
    
    public function connect() {
        $this->dbh = new \PDO('mysql:dbname='.getenv('database.database'), getenv('database.username'), getenv('database.password'));
        // instantiating FluentPDO - a PDO API for simplifying queries
        $this->db = new \Envms\FluentPDO\Query($this->dbh);
    }

    // set table to work with
    public function table($tablename) {
        $this->table = $tablename;
    }

    public function getTable() {
        return $this->table;
    }


    public function select_by_key($keyname,$keyvalue) {
    try {
    $query = $this->db->from($this->table)
             ->where("$keyname = ", $keyvalue);
    } catch (\PDOException $e) {
    $error = [$e->getMessage(), $e->getCode()];
    }

    $result = isset($query) ? (is_array($query) ? $query : []) : $error;
    return $result;
    }

    public function selectAll() {
        try {
        if (!isset($this->table)) die('Table is not set');
        $query = $this->db->from($this->table);
        } catch (\PDOException $e) {
        $error = [$e->getMessage(), $e->getCode()];
        }
        $result = (isset($error) ? $error : $query);
        return $result;
        }

    public function insert($data) {
        try {
        if (!isset($this->table)) die('Table is not set');
        $query = $this->db->insertInto($this->table, $data)->execute();
        } catch (\PDOException $e) {
        $error = [$e->getMessage(), $e->getCode()];
        }
        $result = isset($query) ? (is_array($query) ? $query : []) : $error;
        return $result;

    }

    public function update($data, $id) {
        try {
        if (!isset($this->table)) die('Table is not set');
        $query = $this->db->update($this->table, $data, $id)->execute();
        } catch (\PDOException $e) {
        $error = [$e->getMessage(), $e->getCode()];
        }
        $result = isset($query) ? (is_array($query) ? $query : []) : $error;
        return $result;

    }

    public function delete($id) {
        try {
        if (!isset($this->table)) die('Table is not set');
        $query = $this->db->deleteFrom($this->table)->where('id', $id)->execute();
        } catch (\PDOException $e) {
        $error = [$e->getMessage(), $e->getCode()];
        }
        $result = isset($query) ? $query : $error;
        return $result;

    }

}