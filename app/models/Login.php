<?php 
    class Login{
        private $db;
        public function __construct(){
            $this->db = new Database;
        }

///////////////////////////////////////////////////////////////Customer register /////////////////////////////////////////////////////////////////
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




//Customer login ///////////////////////////////////////////////////////////////
        public function Customer_login($email, $password){
            $this->db->query('SELECT * FROM customer WHERE email = :email');

            //bind value
            $this->db->bind(':email', $email);
            $row = $this->db->single();
            $hashedPassword = $row->password;

            if(password_verify($password, $hashedPassword)){
                return $row;
            }
            else{
                return false;
            }
        }

        

        //Find user by email, Email is passed in by the controller of customer
        public function findCustomerByEmail($email){
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

 
 







 
 ///////////////////////////////////////////////////////////////////  Worker Register  ///////////////////////////////////////////////////////
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



// Worker login ///////////////////////////////////////////////////////////////
         public function Worker_login($email, $password){
            $this->db->query('SELECT * FROM worker AS w JOIN worker_personal_detail AS p ON w.worker_id=p.worker_id WHERE email = :email');

            //bind value
            $this->db->bind(':email', $email);
            $row = $this->db->single();
            $hashedPassword = $row->password;

            if(password_verify($password, $hashedPassword)){
                return $row;
            }
            else{
                return false;
            }
        }



//Find user by email, Email is passed in by the controller of worker
        public function findWorkerByEmail($email){
            //prepared statement
            $this->db->query('SELECT * FROM worker WHERE email=:email');

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












//////////////////////////////////////////////////////////////// Company Register  /////////////////////////////////////////////////////////////
         public function company_register($data){
            $this->db->query('INSERT INTO company (reg_no, com_name, contact, email, password) VALUES (:reg_no, :com_name, :contact, :email, :password)');
 
            //Bind values
            $this->db->bind(':com_name', $data['com_name']);
            $this->db->bind(':contact', $data['contact']);
            $this->db->bind(':reg_no', $data['reg_no']);
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

        //Company login
        public function Company_login($email, $password){
            $this->db->query('SELECT * FROM company WHERE email = :email');

            //bind value
            $this->db->bind(':email', $email);
            $row = $this->db->single();
            $hashedPassword = $row->password;

            if(password_verify($password, $hashedPassword)){
                return $row;
            }
            else{
                return false;
            }
        }

        
        //Find user by email, Email is passed in by the controller of company
        public function findCompanyByEmail($email){
            //prepared statement
            $this->db->query('SELECT * FROM company WHERE email=:email');

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


/////// Admin Login //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        public function Admin_login($email, $password) {
            $this->db->query('SELECT * FROM admin WHERE email = :email');

            //Bind value
            $this->db->bind(':email', $email);

            $row = $this->db->single();

            $currentPassword = $row->password; 

            if ($password == $currentPassword) {
                return $row;
            } else {
                return false;
            }
        }

    //Find user by email. Email is passed in by the controller 
    public function findAdminByEmail($email) {
        //Prepared statement
        $this->db->query('SELECT * FROM admin WHERE email = :email');

        //Email param will be binded with the email variable
        $this->db->bind(':email', $email);

        //Check if email is already registered
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }



    

//////// Manager Login ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function Manager_login($email, $password) {
    $this->db->query('SELECT * FROM manager WHERE email = :email');

    //Bind value
    $this->db->bind(':email', $email);

    $row = $this->db->single();

     $currentPassword = $row->password; 

    if ($password == $currentPassword) {
        return $row;
    } else {
        return false;
    }
}

//Find user by email. Email is passed in by the controller 
public function findManagerByEmail($email) {
    //Prepared statement
    $this->db->query('SELECT * FROM manager WHERE email = :email');

    //Email param will be binded with the email variable
    $this->db->bind(':email', $email);

    //Check if email is already registered
    if($this->db->rowCount() > 0) {
        return true;
    } else {
        return false;
    }
}

}
    
