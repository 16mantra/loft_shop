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
}