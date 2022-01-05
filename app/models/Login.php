<?php 
    class Login{
        private $db;
        public function __construct(){
            $this->db = new Database;
        }

        public function customer_register($data){
           $this->db->query('INSERT INTO customer (fname, lname, contact, email, address, password) VALUES (:fname, :lname, :contact, :email, :address, :password)');

           //Bind values
           $this->db->bind(':fname', $data['fname']);
           $this->db->bind(':lname', $data['lname']);
           $this->db->bind(':contact', $data['contact']);
           $this->db->bind(':email', $data['email']);
           $this->db->bind(':address', $data['address']);
           $this->db->bind(':password', $data['password']);

           //Execute the function
           if($this->db->execute()){
               return true;
           }
           else{
               return false;
           }
        }

        public function worker_register($data){
            $this->db->query('INSERT INTO worker (fname, lname, contact, nic, email, password) VALUES (:fname, :lname, :contact, :nic, :email, :password)');
 
            //Bind values
            $this->db->bind(':fname', $data['fname']);
            $this->db->bind(':lname', $data['lname']);
            $this->db->bind(':contact', $data['contact']);
            $this->db->bind(':nic', $data['nic']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':password', $data['password']);
 
            //Execute the function
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
         }

        //login
        // public function login($email, $password){
        //     $this->db->query('SELECT * FROM customer WHERE email = :email');

        //     //bind value
        //     $this->db->bind(':email', $email);
        //     $row = $this->db->single();
        //     $hashedPassword = $row->password;

        //     if(password_verify($password, $hashedPassword)){
        //         return $row;
        //     }
        //     else{
        //         return false;
        //     }
        // }

        //Find user by email, Email is passed in by the controller
        public function findLoginByEmail($email){
            //prepared statement
            $this->db->query('SELECT * FROM customer WHERE email=:email');

            //Email param will be binded with the email variable
            $this->db->bind(':email', $email);

            //check if email is already registered 
            if($this->db->rowCount()>0){
                return true;
            }
            else{
                return false;
            }
        }
    }