<?php

class CategoryController
{
    private $db;
    private $table = "category";
    public function __construct(QueryBuilder $db)
    {
        $this->db = $db;
    }
    public function create($data, $table){
        $this->db->create($data, $table);
    }
    public function edit($data, $table, $id){
        $this->db->update($data, $table, $id);
    }
    public function get_all(){
        return $this->db->get_all($this->table);
    }
    public function get_by_id( $id){
        return $this->db->get_by_id($this->table, $id);
    }
    public function delete($id, $table){
        $this->db->delete($id, $table);
    }
}