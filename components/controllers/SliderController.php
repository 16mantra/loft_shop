<?php
class SliderController{
    private $db;

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
    public function get_all($table){
        return $this->db->get_all($table);
    }
    public function get_by_id($table, $id){
        return $this->db->get_by_id($table, $id);
    }
    public function delete($id, $table){
       $this->db->delete($id, $table);
    }
    public function slider_sort($data){
        $sql = "SELECT * FROM `slider` ORDER BY sort ASC";
        $query = $this->db->pdo->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}