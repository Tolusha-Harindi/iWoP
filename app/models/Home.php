<?php 
class Home{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }



//////////////////////////  FAQ view   /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function findFAQ(){
    $this->db->query('SELECT * FROM faq');

    $results = $this->db->resultSet();

    return $results;
}


}