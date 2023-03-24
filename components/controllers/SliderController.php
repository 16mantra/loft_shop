<?php
class SliderController{
    private $db;

    public function __construct(QueryBuilder $db)
    {
        $this->db = $db;
    }

    public function create($data){
        $this->db->create($data, "slider");
    }
    public function edit($data, $id){
        $this->db->update($data, "slider", $id);
    }
    public function get_all($table){
        return $this->db->get_all($table);
    }
    public function get_by_id($id){
        return $this->db->get_by_id("slider", $id);
    }
    public function delete($id){
       $this->db->delete($id, "slider");
    }
    public function slider_sort($data){
        $sql = "SELECT * FROM `slider` ORDER BY sort ASC";
        $query = $this->db->pdo->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}