<?php

require_once 'db.php';

abstract class Crud extends DB {
    protected $table;

    abstract public function insert();
    abstract public function update($id);

    public function find($id){
        $sql = "SELECT * FROM  $this->table WHERE id = :id";
        $stmt = db::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fecth();
    }

    public function findAll(){
        $sql = "SELECT * FROM $this->table";
        $stmt = db::prepare($sql);
        $stmt->execute();
        return $stmt->fecthAll();
    }

    public function delete($id){
        $sql = "DELETE FROM $this->table WHERE id = :id";
        $stmt = db::prepare($sql);
        $stmt->binParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}