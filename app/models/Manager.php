<?php
    class Manager {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }
		
		 //////////////////////////////// Manager Profile //////////////////////////////////////////////////////////////////////////////////////////////////
 /*------------------------------------Edit Pofile details------------------------------------------------------------------------------------*/
 public function findManagerDetails(){
        $this->db->query("SELECT * FROM manager WHERE manager_id = '{$_SESSION['manager_id']}'");

        $results = $this->db->resultSet();
        
        return $results;
}


public function changeProfile($data){

    $this->db->query("UPDATE manager SET name = :name, contact = :contact, email = :email, address = :address, profile = :profile  WHERE manager_id = '{$_SESSION['manager_id']}'");

    $this->db->bind(':name', $data['name']);
    $this->db->bind(':contact', $data['contact']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':address', $data['address']);
    $this->db->bind(':profile', $data['profile']);


 

    if($this->db->execute()){
        return true;
    }else {
        return false;
    }

}




    ////////////////////////////////// Admin Change Password////////////////////////////////////////////////////////////////////////////////////

    /*----------------- admin change password-----------------------------------------------------------------------------------------------------*/

    public function findManagerPassword(){
        $this->db->query("SELECT password FROM manager Where manager_id = '{$_SESSION['manager_id']}'");

        $results = $this->db->resultSet();
        
        return $results;
    }


    public function changePassword($data){

        $this->db->query("UPDATE manager SET password = :newpassword WHERE manager_id = '{$_SESSION['manager_id']}'");

        $this->db->bind(':newpassword', $data['new-password']);
     

        if($this->db->execute()){
            return true;
        }else {
            return false;
        }
    
    }
		
		
		
		
		
		
		
		
	//////////////////////////////////// Registered usesrs //////////////////////////////////////////////////////////////////////
    public function findAllComapny(){
        
        $this->db->query('SELECT * FROM company');

        $results = $this->db->resultSet();

        return $results;
    }
	
	 public function findAllWorker(){
        
        $this->db->query('SELECT * FROM worker');

        $results = $this->db->resultSet();

        return $results;
    }

   	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
}
?>