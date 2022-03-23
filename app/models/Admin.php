<?php 
class Admin{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
 
    
/////////////////////////////////// manager ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function findAllManager(){
    $this->db->query('SELECT * FROM manager');

    $results = $this->db->resultSet();

    return $results;
}


public function addManager($data){
    $this->db->query('INSERT INTO manager (admin_id, name, nic, contact, email, address, password, profile) VALUES (:admin_id, :name, :nic, :contact, :email, :address, :password, :profile)');

    //Bind values
    $this->db->bind('admin_id', $data['admin_id']);
    //$this->db->bind('manager_id', $data['manager_id']);
    $this->db->bind('name', $data['name']);
    $this->db->bind('nic', $data['nic']);
    $this->db->bind('contact', $data['contact']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('address', $data['address']);
    $this->db->bind('password', $data['password']);
    $this->db->bind('profile', $data['profile']);


     //execute the function
    if($this->db->execute()){
        return true;
    }else{
        return false;
    } 

}


/*------------------------ Update manager ----------------------------------------------------------------------------*/
    public function findManagerById($manager_id){
        $this->db->query('SELECT * FROM manager WHERE manager_id = :manager_id');

        $this->db->bind(':manager_id', $manager_id);

        $row = $this->db->single();
        return $row;
    }


    public function updateManager($data){
        $this->db->query('UPDATE manager SET name = :name, nic= :nic, contact=:contact, email = :email, address = :address, profile = :profile, password = :password WHERE manager_id= :manager_id');

        $this->db->bind(':manager_id', $data['manager_id']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':nic', $data['nic']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':contact', $data['contact']);
        $this->db->bind(':profile', $data['profile']);
        $this->db->bind(':password', $data['password']);

        //execute the function
        if($this->db->execute()){
            return true;
        }else{
            return false;
        } 

    }


   /*----------------------- Delete Manager --------------------------------------------------------------------------------*/
        public function deleteManager($manager_id){
            $this->db->query('DELETE FROM manager WHERE manager_id = :manager_id');

            $this->db->bind(':manager_id', $manager_id);

            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }









/////////////////////////////////////////   FAQ      ////////////////////////////////////////////////////////////////////////////////////////
public function findAllQuestions(){
    $this->db->query('SELECT * FROM faq');

    $results = $this->db->resultSet();

    return $results;
}


/*--------------------------- Add FAQ ----------------------------------------------------------------------------------------------------*/
    public function addFAQ($data){
        $this->db->query('INSERT INTO faq (admin_id, question, answer) VALUES (:admin_id, :question, :answer)');

        //Bind values
        $this->db->bind(':admin_id', $data['admin_id']);
        $this->db->bind(':question', $data['question']);
        $this->db->bind(':answer', $data['answer']);


        //execute the function
        if($this->db->execute()){
            return true;
        }else{
            return false;
        } 

    }



/*------------------------------ update faq ------------------------------------------------------------------------------------------------*/
    public function findFAQById($faq_id){
        $this->db->query('SELECT * FROM faq WHERE faq_id = :faq_id');

        //Bind values
        $this->db->bind(':faq_id', $faq_id);

        $row = $this->db->single();
        
        return $row;
    }


    public function updateFAQ($data){
        $this->db->query('UPDATE faq SET question = :question, answer = :answer WHERE faq_id = :faq_id');

        $this->db->bind(':faq_id', $data['faq_id']);
        $this->db->bind(':question', $data['question']);
        $this->db->bind(':answer', $data['answer']);

        //execute the function
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

/*-------------------------- Delete faq --------------------------------------------------------------------*/
    public function deleteFAQ($faq_id){
        $this->db->query('DELETE FROM faq WHERE faq_id = :faq_id');

        $this->db->bind(':faq_id', $faq_id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }





    

//////////////   Category    ////////////////////////////////////////////////////////////////////////////////////////////////////////////


//////// Display category in table ////////////////////////////////////////////////////////////////////////////////////////////
    public function findAllCategory(){
        $this->db->query('SELECT * FROM category ORDER BY add_date Desc');

        $results = $this->db->resultSet();

        return $results;
    }
    
    
//////////  Add category ///////////////////////////////////////////////////////////////////////////////////////////////////////
    public function addCategory($data){
        $this->db->query('INSERT INTO category (admin_id, category, logo) VALUES (:admin_id, :category, :logo)');

        $this->db->bind(':admin_id', $data['admin_id']);
        $this->db->bind(':category', $data['category']);
        $this->db->bind(':logo', $data['logo']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }

    }
    
    public function findCategoryById($cat_id){
        $this->db->query('SELECT * FROM category WHERE cat_id = :cat_id');

        //Bind values
        $this->db->bind(':cat_id', $cat_id);

        $row = $this->db->single();
        
        return $row;
    }



/*--------------------------- Update category ----------------------------------------------------------------------------------*/
public function updateCategory($data){

    $this->db->query('UPDATE category SET category = :category, logo = :logo  WHERE cat_id = :cat_id');

    $this->db->bind(':cat_id', $data['cat_id']);
    $this->db->bind(':category', $data['category']);
    $this->db->bind(':logo', $data['logo']);

    if ($this->db->execute()) {
        return true;
    } else {
        return false;
    }

}

/*-------------------------- Delete category --------------------------------------------------------------------*/
public function deleteCategory($cat_id){
    $this->db->query('DELETE FROM category WHERE cat_id = :cat_id');

    $this->db->bind(':cat_id', $cat_id);

    if ($this->db->execute()) {
        return true;
    } else {
        return false;
    }
}








///////////////////////////////////// Registered usesrs //////////////////////////////////////////////////////////////////////
    public function findAllComapny(){
        
        $this->db->query('SELECT * FROM company');

        $results = $this->db->resultSet();

        return $results;
    }

    public function findAllCustomer(){
        
        $this->db->query('SELECT * FROM customer');

        $results = $this->db->resultSet();

        return $results;
    }

    public function findAllWorker(){
        
        $this->db->query('SELECT * FROM worker');

        $results = $this->db->resultSet();

        return $results;
    }








    //////////////////////////////// Admin Profile //////////////////////////////////////////////////////////////////////////////////////////////////
 /*------------------------------------Edit Pofile details------------------------------------------------------------------------------------*/
 public function findAdminDetails(){
        $this->db->query("SELECT * FROM admin Where admin_id = '{$_SESSION['admin_id']}'");

        $results = $this->db->resultSet();
        
        return $results;
}


public function changeProfile($data){

    $this->db->query("UPDATE admin SET name = :name,  email = :email, prof_pic = :prof_pic  WHERE admin_id = '{$_SESSION['admin_id']}'");

    $this->db->bind(':name', $data['name']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':prof_pic', $data['prof_pic']);


 

    if($this->db->execute()){
        return true;
    }else {
        return false;
    }

}














    ////////////////////////////////// Admin Change Password////////////////////////////////////////////////////////////////////////////////////

    /*----------------- admin change password-----------------------------------------------------------------------------------------------------*/

    public function findAdminPassword(){
        $this->db->query("SELECT password FROM admin Where admin_id = '{$_SESSION['admin_id']}'");

        $results = $this->db->resultSet();
        
        return $results;
    }


    public function changePassword($data){

        $this->db->query("UPDATE admin SET password = :newpassword WHERE admin_id = '{$_SESSION['admin_id']}'");

        $this->db->bind(':newpassword', $data['new-password']);
     

        if($this->db->execute()){
            return true;
        }else {
            return false;
        }
    
    }
}