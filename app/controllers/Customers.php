<?php
    class Customers extends Controller {
        public function __construct() {
            $this->customerModel = $this->model('Customer');
        }

        public function customer_category() {

            $cate = $this->customerModel->findAllCategory();

            $data = [
                'cate' => $cate
            ];
            

            $this->view('customers/customer_category', $data);
          
        }

      









///////////////////////////////////////////// Customer Profile //////////////////////////////////////////////////////////////////////////////////////////
        public function customer_profile() {

            if(!isLoggedIn()){
                header("Location: " . URLROOT . "/customers");
            }

            $customer = $this->customerModel->findCustomerDetails();

            $data = [
                'customer' => $customer,
                'fname' =>'',
                'lname' =>'',
                'email' => '',
                'contact' => '',
                'address' => '',
                'prof_pic' => '',
                'fnameError' => '',
                'lnameError' => '',
                'emailError' => '',
                'contactError' => '',
                'addressError' => '',
                'prof_picError' => ''
            ];
    
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
                $data = [
                    'customer' =>$customer,
                    'fname' => $_POST['fname'],
                    'lname' => $_POST['lname'],
                    'email' => $_POST['email'],
                    'contact' => $_POST['contact'],
                    'address' => $_POST['address'],
                    'prof_pic' =>  $_POST['prof_pic'],
                    'fnameError' => '',
                    'lnameError' => '',
                    'emailError' => '',
                    'contactError' => '',
                    'addressError' => '',
                    'prof_picError' => ''
                ];


                if(empty($data['fname'])){
                    $data['fnameError'] = "The First name field cannot be empty";
                }

                if(empty($data['lname'])){
                    $data['lnameError'] = "The Last name field cannot be empty";
                }
    
                if(empty($data['email'])){
                    $data['emailError'] = "The email field cannot be empty";
                }

                if(empty($data['contact'])){
                    $data['contactError'] = "The contact field cannot be empty";
                }

                if(empty($data['address'])){
                    $data['addressError'] = "The address field cannot be empty";
                }

                if(empty($data['porf_pic'])){
                    $data['porf_picError'] = "The porfile picture field cannot be empty";
                }

                 /*error messages are empty*/
                 if(empty($data['fnameError']) && empty($data['lnameError']) &&  empty($data['emailError'] ) && empty($data['contactError']) && empty($data['addressError']) && empty($data['prof_picError'])){
                    if($this->customerModel->changeProfile($data)){
                        header("Location: ". URLROOT . "/customers/customer_profile"); //redirect to
                    }else{
                        die('Something went wrong.');
                    }
                }
                 else{
                    $this->view('customers/customer_profile', $data);
                }
            
            }

        $this->view('customers/customer_profile', $data);
          
    }









    /////////////////////////////////////////// Customer Change Password  //////////////////////////////////////////////////////////////////////////////////////////

    public function customer_change_password() {

        if(!isLoggedIn()){
            header("Location: " . URLROOT . "/customers");
        }

    
            $data = [
                'cpassword' =>'',
                'new-password' =>'',
                'confirm-password' =>'',
                'cpasswordError' =>'',
                'new-passwordError' =>'',
                'confirm-passwordError' =>''
            ];
    
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
                $data = [
                    'cpassword' => $_POST['cpassword'],
                    'new-password' => $_POST['new-password'],
                    'confirm-password' => $_POST['confirm-password'],
                    'cpasswordError' =>'',
                    'new-passwordError' =>'',
                    'confirm-passwordError' =>''
                ];
    
    
                $passwordValidation = "/^(.{0,7}|[^a-z]|[^\d])$/i";
    
                // Validate password on length, numeric values,
                if(empty($data['new-password'])){
                $data['new-passwordError'] = 'Please enter New password.';
              } else if(strlen($data['new-password']) < 6){
                $data['new-passwordError'] = 'Password must be at least 8 characters';
              } else if (preg_match($passwordValidation, $data['new-password'])) {
                $data['new-passwordError'] = 'Password must be have at least one numeric value.';
              }
    
                //Validate confirm password
                if (empty($data['confirm-password'])) {
                    $data['confirm-passwordError'] = 'Please enter confirm password.';
                } else {
                    if ($data['new-password'] != $data['confirm-password']) {
                    $data['confirm-passwordError'] = 'Passwords do not match, please try again.';
                    }
                }
    
                if(empty($data['confirm-passwordError'])){
    
                    $customer = $this->customerModel->findCustomerPassword();
    
                    $Passworddata = [
                        'customer' => $customer
                    ];
                    
                   
                    if (password_verify($data['cpassword'], $Passworddata['customer'][0]->password )){
                         // Hash password
                    $data['new-password'] = password_hash($data['new-password'], PASSWORD_DEFAULT);
    
                        if ($this->customerModel->changePassword($data)) {
                            //Redirect to the login page
                            header('location: ' . URLROOT . '/customers/customer_change_password');
                        } else {
                            die('Something went wrong.');
                        }  
                    }else{
                        $data['cpasswordError'] = 'Passwords do not match, please try again.';
                    }
                $this-> view('customers/customer_change_password', $data);
                }
        }
        

    $this->view('customers/customer_change_password', $data);
      
}















/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        public function update_ads($ads_id){
                $post = $this->customerModel->findPostById($ads_id);

                if(!isLoggedIn()){
                    header("Location:" . URLROOT . "/customer");
                }elseif($post->cus_id != $_SESSION['cus_id']){
                    header("Location: " . URLROOT . "/customers");
                }

                $data = [
                    'post' => $post,
                    'title' => '',
                    'category' => '',
                    'description' => '',
                    'address'=> '',
                    'contact' => '',
                    'start_date' => '',
                    'end_date' => '',
                    'budget' => '',
                    'work' => '',
                    'titleError' => '',
                    'categoryError' => '',
                    'descriptionError' => '',
                    'addressError' => '',
                    'contactError' => '',
                    'start_dateError' => '',
                    'end_dateError' => '',
                    'budgetError' =>'',
                    'workError' => '',
                    
                ];

                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
                    $data = [
                        'ads_id' => $ads_id,
                        'post' => $post,
                        'cus_id' => $_SESSION['cus_id'],
                        'category' => trim($_POST['category']),
                        'title' => trim($_POST['title']),
                        'description' => trim($_POST['description']),
                        'address' => trim($_POST['address']),
                        'contact' => trim($_POST['contact']),
                        'start_date' => trim($_POST['start_date']),
                        'end_date' => trim($_POST['end_date']),
                        'budget' => trim($_POST['budget']),
                        'work' => trim($_POST['work']),
                        'categoryError' => '',
                        'titleError' => '',
                        'descriptionError' => '',
                        'addressError' => '',
                        'contactError' => '',
                        'start_dateError' => '',
                        'end_dateError' => '',
                        'budgetError' => '',
                        'workError' => '',
            
                    ];

                    if(empty($data['category'])){
                        $data['categoryError'] = "The category of a Post cannot be empty";
                    }
            
                    if(empty($data['title'])){
                        $data['titleError'] = "The Title of a Post cannot be empty";
                    }
            
                    if(empty($data['description'])){
                        $data['descriptionError'] = "The description of a Post cannot be empty";
                    }
            
                    if(empty($data['address'])){
                        $data['addressError'] = "The address of a Post cannot be empty";
                    }
            
                    if(empty($data['contact'])){
                        $data['contactError'] = "The contact of a Post cannot be empty";
                    }
            
                    if(empty($data['start_date'])){
                        $data['start_dateError'] = "The start date of a Post cannot be empty";
                    }
            
                    if(empty($data['end_date'])){
                        $data['end_dateError'] = "The end date of a Post cannot be empty";
                    }
            
                    if(empty($data['budget'])){
                        $data['budgetError'] = "The budget of a Post cannot be empty";
                    }
            
                    if(empty($data['work'])){
                        $data['workError'] = "The work of a Post cannot be empty";
                    }
            
                    //////////////////////////////////////////////////////////////////////////////////////////////////////////
                    if($data['title'] == $this->customerModel->findPostById($ads_id)->title){
                        $data['titleError'] == 'At least change the title';
                    }
            
                    if($data['category'] == $this->customerModel->findPostById($ads_id)->category){
                        $data['categoryError'] == 'At least change the category';
                    }
            
                    if($data['description'] == $this->customerModel->findPostById($ads_id)->description){
                        $data['descriptionError'] == 'At least change the description';
                    }
            
                    if($data['address'] == $this->customerModel->findPostById($ads_id)->address){
                        $data['addressError'] == 'At least change the address';
                    }
            
                    if($data['contact'] == $this->customerModel->findPostById($ads_id)->contact){
                        $data['contactError'] == 'At least change the contact number';
                    }
            
                    if($data['start_date'] == $this->customerModel->findPostById($ads_id)->start_date){
                        $data['start_dateError'] == 'At least change the start_date';
                    }
            
                    if($data['end_date'] == $this->customerModel->findPostById($ads_id)->end_date){
                        $data['end_dateError'] == 'At least change the end_date';
                    }
            
                    if($data['budget'] == $this->customerModel->findPostById($ads_id)->budget){
                        $data['budgetError'] == 'At least change the budget';
                    }
            
                    if($data['work'] == $this->customerModel->findPostById($ads_id)->work){
                        $data['workError'] == 'At least change the work to be done';
                    }
            
            
                    /*check error messages are empty*/
                    if(empty($data['categoryError']) && empty($data['titleError']) && empty($data['descriptionError']) && empty($data['addressError']) && empty($data['contactError']) && empty($data['start_dateError']) && empty($data['end_dateError']) && empty($data['budgetError']) && empty($data['workError'])){
                        if($this->customerModel->updatePost($data)){
                            header("Location: ". URLROOT . "/customers/customer_responses"); //redirect to
                        }else{
                            echo "<script>alert('Something went wrong, Please try again!'); </script>";
                        }
                    }else{
                        $this->view('customers/update_ads', $data);
                    }
                }         
                
            $this->view('customers/update_ads', $data);     
        } 
       
        $this->view('customers/customer_service_providers', $data);
    }


        
}
