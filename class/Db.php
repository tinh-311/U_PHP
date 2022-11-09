<?php
class Db {
    protected $conn;
    
    function __construct() {
        $connStr = 'mysql:host=' . HOST.';dbname=' .DB;
        $this->conn = new PDO($connStr, USER, PASSWORD);
        $this->conn->query('set names utf8');
    }

    protected function select($sql, $arrayParam=[]) {
        $stm = $this->conn->prepare($sql);
        $stm->execute($arrayParam);

        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    protected function update($sql, $arrayParam=[]) {
        $stm = $this->conn->prepare($sql);
        $stm->execute($arrayParam);

        return $stm->rowCount();
    }
}