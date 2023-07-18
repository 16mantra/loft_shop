<?php 
    class ProductController{
        private $db;
        private $category_controller;
        private $table = "products";
        public function __construct(QueryBuilder $db, CategoryController $category_controller)
        {
            $this->db = $db;
            $this->category_controller = $category_controller;
        }
        public function create($data){
            $this->db->create($data, $this->table);
        }
        public function edit($data, $id){
            $this->db->update($data, $this->table, $id);
        }
        public function get_all(){
            return $this->db->get_all($this->table);
        }
        public function get_by_id($id){
            return $this->db->get_by_id($this->table, $id);
        }
        public function delete($id){
            $this->db->delete($id, $this->table);
        }
        public function get_name_category($id){
            return  $this->category_controller->get_by_id($id)["name"];
        }
    }
