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


      //////select ads data - upadte ads   //////////////////////////////////////////////////////////////////////////////////////////////////////
      public function findPostbyId($ads_id){
        $this->db->query('SELECT * FROM customer_ads WHERE ads_id = :ads_id');

        $this->db->bind(':ads_id', $ads_id);
        $row = $this->db->single();

        return $row;

     }

     //////upadte ads   //////////////////////////////////////////////////////////////////////////////////////////////////////
    
     public function updatePost($data){
        $this->db->query('UPDATE customer_ads SET title = :title, category = :category, description= :description, address = :address,  contact= :contact, start_date =:start_date, end_date =:end_date, budget =:budget, work =:work WHERE ads_id = :ads_id');

        $this->db->bind(':ads_id', $data['ads_id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':category', $data['category']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':contact', $data['contact']);
        $this->db->bind(':start_date', $data['start_date']);
        $this->db->bind(':end_date', $data['end_date']);
        $this->db->bind(':budget', $data['budget']);
        $this->db->bind(':work', $data['work']);


        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

     }


///  Delete ads /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function deletePost($ads_id){
        $this->db->query('DELETE FROM customer_ads WHERE ads_id = :ads_id');

        $this->db->bind(':ads_id', $ads_id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}