<?php
    class User {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        ///Test (database and table needs to exist before this works)
        /*public function getUsers() {*/
            // $this->db->query("SELECT * FROM users");
            /*$this->db->query("SELECT * FROM admin"); 
            $result = $this->db->resultSet();
            return $result;
        }*/
        
    }