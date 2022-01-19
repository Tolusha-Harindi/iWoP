<?php 
class Admin{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    
//////////////   Category    ////////////////////////////////////////////////////////////////////////////////////////////////////////////


//////// Display category in table ////////////////////////////////////////////////////////////////////////////////////////////
    public function findAllCategory(){
        $this->db->query('SELECT * FROM category ORDER BY add_date Desc');

        $results = $this->db->resultSet();

        return $results;
    }
    
    
//////////  Add category ///////////////////////////////////////////////////////////////////////////////////////////////////////
    public function addCategory($data){
        $this->db->query('INSERT INTO category (/*admin_id,*/ category, logo) VALUES (/*:admin_id,*/ :category, :logo)');

        // $this->db->bind(':admin_id', $data['admin_id']);
        $this->db->bind(':category', $data['category']);
        $this->db->bind(':logo', $data['logo']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }

    }
    
}