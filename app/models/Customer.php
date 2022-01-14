<?php 
class Customer{
     private $db;

     public function __construct(){
         $this->db = new Database;
     }

     public function postNewAds(){
         $this->db->query('SELECT * FROM customer_ads ORDER BY post_date DESC');

         $results = $this->db->resultSet(); //results inside array

         return $results;
     }

     public function addpost($data){
        $this->db->query('INSERT INTO customer_ads (cus_id, category, title, description, address, contact, start_date, end_date, budget, work) VALUES (:cus_id, :category, :title, :description, :address, :contact, :start_date, :end_date, :budget, :work)');

        //Bind values
        $this->db->bind(':cus_id', $data['cus_id']);
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