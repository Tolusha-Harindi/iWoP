<?php 
class Includ{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function findName(){
        $this->db->query('SELECT * FROM admin');

        $results = $this->db->resultSet();

        return $results;
    }

}
 