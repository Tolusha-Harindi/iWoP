<?php 
class Includ{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }



//////////////////////////////   Admin ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function findName(){
        $this->db->query ('SELECT * FROM admin');

        $results = $this->db->resultSet();

        return $results;
    }







////////////////////////    Customer   ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function findCustomer(){
        $this->db->query("SELECT * FROM customer  WHERE cus_id = '{$_SESSION['cus_id']}'");

        $results = $this->db->resultSet();

        return $results;
    }

}
 