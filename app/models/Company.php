<?php 
class Company{
    private $db;

     public function __construct(){
         $this->db = new Database;
     }

     public function findAllPosts(){
         $this->db->query('SELECT * FROM company_ads ORDER BY created_at DESC');

         $results = $this->db->resultSet();

         return $results;
     }

     public function addPost($data){
        $this->db->query('INSERT INTO company_ads (reg_no,  category, title, description, address, contact, start_date, end_date, budget, work) VALUES (:reg_no, :category, :title, :description, :address, :contact, :start_date, :end_date, :budget, :work)');

        //bind values
        $this->db->bind(':reg_no', $data['reg_no']);
        $this->db->bind(':category', $data['category']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':contact', $data['contact']);
        $this->db->bind(':start_date', $data['start_date']);
        $this->db->bind(':end_date', $data['end_date']);
        $this->db->bind(':budget', $data['budget']);
        $this->db->bind(':work', $data['work']);

        //execute the function
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
     }
}