<?php 
class Customer{
     private $db;

     public function __construct(){
         $this->db = new Database;
     }

     public function postNewAds(){
         $this->db->query("SELECT * FROM customer_ads WHERE cus_id='{$_SESSION['cus_id']}' AND status = 'accept' ORDER BY post_date DESC");

         $results = $this->db->resultSet(); //results inside array

         return $results;
     }







///////////////////////   Add Posts     //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
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






    ////////////////////////////////// Customer Profile////////////////////////////////////////////////////////////////////////////////////

    /*------------------------------------Edit Pofile details------------------------------------------------------------------------------------*/
    public function findCustomerDetails(){
        $this->db->query("SELECT * FROM customer Where cus_id = '{$_SESSION['cus_id']}'");

        $results = $this->db->resultSet();
        
        return $results;
    }


    public function changeProfile($data){

        $this->db->query("UPDATE customer SET fname = :fname,  lname = :lname, email = :email, contact=:contact, address = :address, prof_pic = :prof_pic WHERE cus_id = '{$_SESSION['cus_id']}'");

        $this->db->bind(':prof_pic', $data['prof_pic']);
        $this->db->bind(':fname', $data['fname']);
        $this->db->bind(':lname', $data['lname']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':contact', $data['contact']);
        $this->db->bind(':address', $data['address']);

     

        if($this->db->execute()){
            return true;
        }else {
            return false;
        }
    
    }


    /*----------------- customer change password-----------------------------------------------------------------------------------------------------*/

    public function findCustomerPassword(){
        $this->db->query("SELECT password FROM customer Where cus_id = '{$_SESSION['cus_id']}'");

        $results = $this->db->resultSet();
        
        return $results;
    }


    public function changePassword($data){

        $this->db->query("UPDATE customer SET password = :newpassword WHERE cus_id = '{$_SESSION['cus_id']}'");

        $this->db->bind(':newpassword', $data['new-password']);
     

        if($this->db->execute()){
            return true;
        }else {
            return false;
        }
    
    }



    ////////////////////////  View added Categories ///////////////////////////////////////////////////////////////////////////////////////////////
    public function findAllCategory(){
        $this->db->query('SELECT * FROM category');

        $results = $this->db->resultSet();

        return $results;

    }






    /////////////////  Customer Dashboard       /////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function pendingAds(){
        $this->db->query("SELECT COUNT(*) AS pendingCount FROM customer_ads WHERE status= 'Pending'");

        $results = $this->db->resultSet();
        
        return $results;
    }

    public function acceptedAds(){
        $this->db->query("SELECT COUNT(*) AS acceptedCount FROM customer_ads WHERE status= 'accept'");

        $results = $this->db->resultSet();
        
        return $results;
    }


    public function rejectedAds(){
        $this->db->query("SELECT COUNT(*) AS rejectedCount FROM customer_ads WHERE status= 'reject'");

        $results = $this->db->resultSet();
        
        return $results;
    }


    ////////////////////////////////   Service Providers Page //////////////////////////////////////////////////////////////////////////////////////////////
    public function viewWorkers(){
        $this->db->query("SELECT *  FROM worker");

        $results = $this->db->resultSet();
        
        return $results;
    }








    ////////////////////////  Service providers     ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function searchWorkers($data){

        $this->db->query('select * from worker where district = :district and city = :city and category= :category');

        $this->db->bind(':district', $data['district']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':category', $data['category']);
        $results = $this->db->resultSet();
        
        return $results;
        
    }



    ///////////////  Send request for worker    /////////////////////////////////////////////////////////////////////////////////////////////////////
    public function requestWorkers($data){
        $this->db->query('INSERT INTO worker (time, sdate, fname, address, amount) VALUES (:time, :sdate, :fdate,  :address, :amount)');

        //Bind values
        $this->db->bind(':time', $data['time']);
        $this->db->bind(':sdate', $data['sdate']);
        $this->db->bind(':fname', $data['fname']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':amount', $data['amount']);

        //execute the function
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
     }
}