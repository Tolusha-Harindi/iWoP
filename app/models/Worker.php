<?php
   class Worker{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
      
      public function getprofile($wid){
        $this->db->query('SELECT * FROM worker WHERE worker_id = :worker_id');

        $this->db->bind(':worker_id', $wid);
        $row = $this->db->single();

        return $row;
    }
     
     public function getbank($wid){
        $this->db->query('SELECT * FROM bank WHERE worker_id = :worker_id');

        $this->db->bind(':worker_id', $wid);
        $row = $this->db->single();

        return $row;
    }

    public function editbank($data){
        $this->db->query('UPDATE bank SET holder=:name, bank_name=:bname, branch=:branch, code=:code, account_no=:account WHERE worker_id = :worker_id');

        $this->db->bind(':worker_id', $data['worker_id']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':bname', $data['bname']);
        $this->db->bind(':branch', $data['branch']);
        $this->db->bind(':code', $data['code']);
        $this->db->bind(':account', $data['account']);

        //Execute the function
        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
    }
      
      public function worker_schedule($data){
        $this->db->query('INSERT INTO schedule (worker_id, cus_name, address, contact_no, date, start_time, end_time) VALUES (:worker_id, :name, :address, :contact, :date, :startTime, :endTime)');

        //Bind values
        $this->db->bind(':worker_id', $data['worker_id']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':contact', $data['contact']);
        $this->db->bind(':startTime', $data['startTime']);
        $this->db->bind(':endTime', $data['endTime']);
        $this->db->bind(':date', $data['date']);

        //Execute the function
        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
    }
      
      public function allCusAds(){
        $this->db->query('SELECT c.fname, a.category, a.post_date, a.address, a.contact, a.title, a.description, a.start_date, a.end_date, a.budget, a.work
                          FROM customer_ads AS a 
                          INNER JOIN customer AS c
                          ON a.cus_id = c.cus_id
                          ORDER BY post_date DESC');
       
        $results = $this->db->resultSet(); //results inside array

        return $results;
    }

   
}
