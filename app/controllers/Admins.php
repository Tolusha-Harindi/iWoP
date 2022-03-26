<?php
    class Admins extends Controller {
        public function __construct() {
            $this->adminModel = $this->model('Admin');
        }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        public function admin_category() {

            $add = $this->adminModel->findAllCategory();

             if(!isLoggedIn()){
                 header("Location: " . URLROOT . "/admins");
             }

            $data = [
                'add'  => $add,
                'category' => '',
                'logo' => '',
                //'add_date' => '',
                'categoryError' => '',
                'logoError' => ''
            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 

                $data = [
                    //'add'  => $add,
                    'admin_id' => $_SESSION['admin_id'],
                    'category' => trim($_POST['category']),
                    'logo' => trim($_POST['logo']),
                    'categoryError' => '',
                    'logoError' => ''
                 ];

                if(empty($data['category'])){
                    $data['categoryError'] = 'The category field cannot be empty';
                }
                if(empty($data['logo'])){
                    $data['logoError'] = 'The image upload field cannot be empty';
                }
                if(empty($data['categoryError']) && empty($data['logoError'])){
                    if ($this->adminModel->addCategory($data)){
                        header("Location: " . URLROOT . "/admins/admin_category");
                        
                    }else{
                        die("Something went wrong, please try again");
                    }
                }else{
                    $this->view('admins/admin_category', $data);
                }
            }

            $this->view('admins/admin_category', $data);
          
        }




        /*---------------------- Update category -----------------------------------------------------------------------------------------------------------------------------------*/
        public function update_category($cat_id){

            $add = $this->adminModel->findCategoryById($cat_id);

            if(!isLoggedIn()){
                header("Location:" . URLROOT . "/admins");
            }elseif($add->admin_id != $_SESSION['admin_id']){
                header("Location: " . URLROOT . "/admins");
            }

            $data = [
                'add' => $add,
                'category' => '',
                'logo' => '',
                'categoryError' => '',
                'logoError' => ''
            ];

            
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
            $data = [
                'cat_id' => $cat_id,
                'add' => $add,
                'admin_id' => $_SESSION['admin_id'],
                'category' => trim($_POST['category']),
                'logo' => trim($_POST['logo']),
                'categoryError' => '',
                'logoError' => ''
            ];

            if(empty($data['category'])){
                $data['categoryError'] = "The category field cannot be empty";
            }

            if(empty($data['logo'])){
                $data['logoError'] = "The logo field cannot be empty";
            }

            //////////////////////////////////////////////////////////////////////////////////////////////////////////
            if($data['category'] == $this->adminModel->findCategoryById($cat_id)->category){
                $data['categoryError'] == 'At least change the category';
            }

            if($data['logo'] == $this->adminModel->findCategoryById($cat_id)->logo){
                $data['logoError'] == 'At least change the logo';
            }

              /*check error messages are empty*/
              if(empty($data['categoryError']) && empty($data['logoError'])){
                if($this->adminModel->updateCategory($data)){
                    header("Location: ". URLROOT . "/admins/admin_category"); //redirect to
                }else{
                    die("Something went wrong, please try again");
                    
                }
            }else{
                $this->view('admins/update_category', $data);
            }
        }

            $this->view('admins/update_category', $data);     

        }




        /*---------------------------- Delete category --------------------------------------------------------------------------------------------------------------------------*/
        public function delete_category($cat_id){
            $add = $this->adminModel->findCategoryById($cat_id);

            if(!isLoggedIn()){
                header("Location: " . URLROOT . "/admins");
            }elseif($add->admin_id != $_SESSION['admin_id']){
                header("Location: " . URLROOT . "/admins");
            } 
            
            $data = [
                'add' => $add,
                'category' => '',
                'logo' => '',
                'add_date' => '',
                'categoryError' => '',
                'logoError' => '',
                'add_dateError' => ''
            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
                if($this->adminModel->deleteCategory($cat_id)){
                    header("Location: " . URLROOT . "/admins/admin_category");
                    
                }else {
                    die('Something went wrong');
                }
    
            }

        }













/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        public function admin_complaints() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'admin_complaints page',
                //'users' => $users

            ];

            $this->view('admins/admin_complaints', $data);
          
        }











///////////////// Admin Dashboard   /////////////////////////////////////////////////////////////////////////////////////
        public function admin_dashboard() {

            $dashbrd = $this->adminModel-> viewManagerCount();
            $category = $this->adminModel->viewCategoryCount();
            $customer = $this->adminModel->viewCustomerCount();
            $worker = $this->adminModel->viewWorkerCount();
            $company = $this->adminModel->viewCompanyCount();
            $cusads = $this->adminModel->viewCusPendingadsCount();
            $comads = $this->adminModel->viewComPendingadsCount();


            $data = [
                'dashbrd' => $dashbrd,
                'category' => $category,
                'customer' => $customer,
                'worker' => $worker,
                'company' => $company,
                'cusads' => $cusads,
                'comads' => $comads,
            ];

            $this->view('admins/admin_dashboard', $data);
          
        }












/////////////////////  FAQ      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        
/*------------------------ Add FAQ --------------------------------------------------------------------------------------------------------------------------------------------------*/
public function admin_faq() {

            $newfaq = $this->adminModel->findAllQuestions();

            if(!isLoggedIn()){
                header("Location: "  . URLROOT . "/admins");
            }

            $data = [
                'newfaq' => $newfaq,
                'question' => '',
                'answer' => '',
                'questionError' => '',
                'answerError' => ''

            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


                $data = [
                    'admin_id' => $_SESSION['admin_id'],
                    'question' => trim($_POST['question']),
                    'answer' => trim($_POST['answer']),
                    'questionError' => '',
                    'answerError' => ''
    
                ];

                if(empty($data['question'])){
                    $data['questionError'] = 'The question field cannot be empty';
                }

                if(empty($data['answer'])){
                    $data['answerError'] = 'The answer field cannot be empty';
                }

                /*error messages are empty*/
                if(empty($data['questionError']) && empty($data['answerError'])){
                    if ($this->adminModel->addFAQ($data)){
                        header("Location: " . URLROOT . "/admins/admin_faq");
                     
                    }else{
                        die("Something went wrong, please try again");
                    }
                }else{
                    $this->view('admins/admin_faq', $data);
                }
            }  
            $this->view('admins/admin_faq', $data);
          
        }



/*--------------------------- Update FAQ -------------------------------------------------------------------------------------------------------------------------------------*/
    public function update_faq($faq_id){

         $faq = $this->adminModel->findFAQById($faq_id);

        //  if(!isLoggedIn()){
        //     header("Location: " . URLROOT . "/admins");
        //  }elseif($faq->admin_id != $_SESSION['admin_id']){
        //     header("Location: " . URLROOT . "/admins");

         //}
        
         $data = [
            'faq_id' => $faq_id,
            'faq' => $faq,
            'question' => '',
            'answer' => '',
            'questionError' => '',
            'answerError' => ''
        ];


        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


            $data = [
                'faq_id' => $_POST['faq_id'],
                'faq' => $faq,
                'admin_id' => $_SESSION['admin_id'],
                'question' => trim($_POST['question']),
                'answer' => trim($_POST['answer']),
                'questionError' => '',
                'answerError' => ''

            ];

            if(empty($data['question'])){
                $data['questionError'] = 'The question field cannot be empty';
            }

            if(empty($data['answer'])){
                $data['answerError'] = 'The answer field cannot be empty';
            }


             /////////////////////////////////////////////////////////////////////////////////////////////////
             if($data['question'] == $this->adminModel->findFAQById($faq_id)->question){
                $data['questionError'] == 'At least change the question!';
            }

            if($data['answer'] == $this->adminModel->findFAQById($faq_id)->answer){
                $data['answerError'] == 'At least change the answer!';
            }

            /*error messages are empty*/
            if(empty($data['questionError']) && empty($data['answerError'])){
                if ($this->adminModel->updateFAQ($data)){
                    header("Location: " . URLROOT . "/admins/admin_faq");
                 
                }else{
                    die("Something went wrong, please try again");
                }
            }else{
                $this->view('admins/update_faq', $data);
            }
        }  

        $this->view('admins/update_faq', $data);

    }



/*---------------------------- Delete FAQ --------------------------------------------------------------------------------------------------------------------------*/
        public function delete_faq($faq_id){
            $faq = $this->adminModel->findFAQById($faq_id);

            if(!isLoggedIn()){
                header("Location: " . URLROOT . "/admins");
            }elseif($faq->admin_id != $_SESSION['admin_id']){
                header("Location: " . URLROOT . "/admins");
            } 
            
            $data = [
                'faq' => $faq,
                'question' => '',
                'answer' => '',
                'questionError' => '',
                'answerError' => '',
            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
                if($this->adminModel->deleteFAQ($faq_id)){
                    header("Location: " . URLROOT . "/admins/admin_faq");
                    
                }else {
                    die('Something went wrong');
                }
    
            }

        }




////////////////////////////////// Add manager /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        public function admin_manager() {

            $manager = $this->adminModel->findAllManager();

            if(!isLoggedIn()){
                header("Location: "  . URLROOT . "/admins");
            }

            $data = [
                'manager' => $manager,
                'name' => '',
                'nic' => '',
                'contact' => '',
                'email' => '',
                'address' => '',
                'profile' => '',
                'password' => '',
                'nameError' => '',
                'nicError' => '',
                'contactError' => '',
                'emailError' => '',
                'addressError' => '',
                'profileError' => '',
                'passwordError' => '',

            ];


            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                 $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                 $data = [
                    'admin_id' => $_SESSION['admin_id'],
                    //'manager' => $manager,
                    'name' => trim($_POST['name']),
                    'nic' => trim($_POST['nic']),
                    'contact' => trim($_POST['contact']),
                    'email' => trim($_POST['email']),
                    'address' => trim($_POST['address']),
                    'profile' => trim($_POST['profile']),
                    'password' => trim($_POST['password']),
                    'nameError' => '',
                    'nicError' => '',
                    'contactError' => '',
                    'emailError' => '',
                    'addressError' => '',
                    'profileError' => '',
                    'passwordError' => '',
    
                ];

                if(empty($data['name'])){
                    $data['nameError'] = 'The name field cannot be empty';
                }

                if(empty($data['nic'])){
                    $data['nicError'] = 'The NIC field cannot be empty';
                }

                if(empty($data['contact'])){
                    $data['contactError'] = 'The contact field cannot be empty';
                }

                if(empty($data['email'])){
                    $data['emailError'] = 'The email field cannot be empty';
                }

                if(empty($data['address'])){
                    $data['addressError'] = 'The address field cannot be empty';
                }

                if(empty($data['profile'])){
                    $data['profileError'] = 'The profile picture field cannot be empty';
                }

                if(empty($data['password'])){
                    $data['passwordError'] = 'The password field cannot be empty';
                }

                if(empty($data['nameError']) && empty($data['nicError']) && empty($data['contactError']) && empty($data['emailError']) && empty($data['addressError']) && empty($data['passwordError'])){
                    if ($this->adminModel->addManager($data)){
                        header("Location: " . URLROOT . "/admins/admin_manager");
                     
                    //hash password
                    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                    
                    }else{
                        die("Something went wrong, please try again");
                    }
                }else{
                    $this->view('admins/admin_manager', $data);
                }

            }

            $this->view('admins/admin_manager', $data);
          
        }

    
    /*------------- update manager -------------------------------------------------------------------------------------------------------------------------------------*/
        public function update_manager($manager_id){

            $manager = $this->adminModel->findManagerById($manager_id);

            if(!isLoggedIn()){
                header("Location: " . URLROOT . "/admins");
            }else if($manager-> admin_id != $_SESSION['admin_id']){
                header("Location: " . URLROOT . "/admins");

            }
            
            $data = [
                'manager' => $manager,
                'name' => '',
                'nic' => '',
                'contact' => '',
                'email' => '',
                'address' => '',
                'profile' => '',
                'password' => '',
                'nameError' => '',
                'nicError' => '',
                'contactError' => '',
                'emailError' => '',
                'addressError' => '',
                'profileError' => '',
                'passwordError' => ''
            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'manager_id' => $manager_id,
                   'admin_id' => $_SESSION['admin_id'],
                   'manager' => $manager,
                   'name' => trim($_POST['name']),
                   'nic' => trim($_POST['nic']),
                   'contact' => trim($_POST['contact']),
                   'email' => trim($_POST['email']),
                   'address' => trim($_POST['address']),
                   'profile' => trim($_POST['profile']),
                   'password' => trim($_POST['password']),
                   'nameError' => '',
                   'nicError' => '',
                   'contactError' => '',
                   'emailError' => '',
                   'addressError' => '',
                   'profileError' => '',
                   'passwordError' => '',
   
               ];

               if(empty($data['name'])){
                   $data['nameError'] = 'The name field cannot be empty';
               }

               if(empty($data['nic'])){
                   $data['nicError'] = 'The NIC field cannot be empty';
               }

               if(empty($data['contact'])){
                   $data['contactError'] = 'The contact field cannot be empty';
               }

               if(empty($data['email'])){
                   $data['emailError'] = 'The email field cannot be empty';
               }

               if(empty($data['address'])){
                   $data['addressError'] = 'The address field cannot be empty';
               }

               if(empty($data['profile'])){
                   $data['profileError'] = 'The profile picture field cannot be empty';
               }

               if(empty($data['password'])){
                   $data['passwordError'] = 'The password field cannot be empty';
               }

               /////////////////////////////////////////////////////////////////////////////////////////////////
               if($data['name'] == $this->adminModel->findManagerById($manager_id)->name){
                    $data['nameError'] == 'At least change the name!';
               }

               if($data['nic'] == $this->adminModel->findManagerById($manager_id)->nic){
                    $data['nicError'] == 'At least change the nic!';
                }

                if($data['contact'] == $this->adminModel->findManagerById($manager_id)->contact){
                    $data['contactError'] == 'At least change the contact!';
                }

                if($data['email'] == $this->adminModel->findManagerById($manager_id)->email){
                    $data['emailError'] == 'At least change the email!';
                }

                if($data['address'] == $this->adminModel->findManagerById($manager_id)->address){
                    $data['addressError'] == 'At least change the address!';
                }

                if($data['profile'] == $this->adminModel->findManagerById($manager_id)->profile){
                    $data['profileError'] == 'At least change the profile!';
                }

                if($data['password'] == $this->adminModel->findManagerById($manager_id)->password){
                    $data['passwordError'] == 'At least change the password!';
                }


                /*check error messages are empty*/
               if(empty($data['nameError']) && empty($data['nicError']) && empty($data['contactError']) && empty($data['emailError']) && empty($data['addressError']) && empty($data['passwordError'])){
                   if ($this->adminModel->updateManager($data)){
                       header("Location: " . URLROOT . "/admins/update_manager");
                    
                   }else{
                       die("Something went wrong, please try again");
                   }
               }else{
                   $this->view('admins/update_manager', $data);
               }

           }

            $this->view('admins/update_manager', $data);
        }


////////////////////DElete Manager///////////////////////////
    public function delete_manager($manager_id){
        $manager = $this->adminModel->findManagerById($manager_id);

        if(isLoggedIn()){
            header("Location: " . URLROOT . "/admins");
        }elseif($manager->admin_id != $_SESSION['admin_id']){
            header("Location: " . URLROOT . "/admins");
        }

        $data = [
            'manager' => $manager,
            'name' => '',
            'nic' => '',
            'contact' => '',
            'address'=> '', 
            'email' => '',
            'profile' => '',
            'password' => '',
            'nameError' => '',
            'nicError' => '',
            'contactError' => '',
            'addressError' => '',
            'emailError' => '',
            'profileError' => '',
            'passwordError' => '',
            
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if($this->adminModel->deleteManager($manager_id)){
                header("Location: " . URLROOT . "/admins/admin_manager");
                
            }else {
                die('Something went wrong');
            }

        }
    }
    




/////////////////////////  Admin Pending ads ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

public function admin_pendingads() {

            if(!isLoggedIn()){
                header("Location: " . URLROOT . "/admins");
            }

            $ads = $this->adminModel->getAds();
            $adsw = $this->adminModel->getAdsw();
            


            $data = [
                'ads' => $ads,
                'adsw' => $adsw,
                'status' => ''
                // 'title' => '',
                // 'category' => '',
                // 'description' => '',
                // 'address' => '',
                // 'contact' => '',
                // 'work' => '',


            ];


            /*--------customer accept ads-----------*/
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
                $data = [
                    'ads_id' => trim($_POST['ads_id']),
    
                ];
                    if($this->adminModel->cusacceptAds($data))
                    {
                        header("Location: " . URLROOT . "/admins/admin_pendingads");
                    }else{
                        die("Something went wrong, Please try again!");
                    }
            
    
           $this-> view('admins/admin_pendingads', $data);
    
            }



             /*--------company accept ads-----------*/
             if($_SERVER['REQUEST_METHOD'] == 'POST')
             {
                 $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
     
                 $data = [
                     'ads_id' => trim($_POST['ads_id']),
     
                 ];
                     if($this->adminModel->comacceptAds($data))
                     {
                         header("Location: " . URLROOT . "/admins/admin_pendingads");
                     }else{
                         die("Something went wrong, Please try again!");
                     }
             
     
            $this-> view('admins/admin_pendingads', $data);
     
             }

        
            $this->view('admins/admin_pendingads', $data);
          
        }



/*-----------------Customer reject ads   ----------------------------------------------------------------------------------------------------------------*/
        public function admin_cusrejectads(){

            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
                $data = [
                    'ads_id' => trim($_POST['ads_id']),
    
                ];
                    if($this->adminModel->cusacceptAds($data))
                    {
                        header("Location: " . URLROOT . "/admins/admin_pendingads");
                    }else{
                        die("Something went wrong, Please try again!");
                    }

     
            }
            
    
        }






/*-----------------Company reject ads   ----------------------------------------------------------------------------------------------------------------*/
public function admin_comrejectads(){

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
            'ads_id' => trim($_POST['ads_id']),

        ];
            if($this->adminModel->rejectComAds($data))
            {
                header("Location: " . URLROOT . "/admins/admin_pendingads");
            }else{
                die("Something went wrong, Please try again!");
            }


    }
    

}






////////////////////////////////////////////// Admin Profile /////////////////////////////////////////////////////////////////////////////////////////////////////
public function admin_profile() {

    if(!isLoggedIn()){
        header("Location: " . URLROOT . "/admins");
    }

    $admin = $this->adminModel->findAdminDetails();


    $data = [
        'admin' => $admin,
        'name' => '',
        'email' => '',
        'prof_pic' => '',
        'nameError' => '',
        'emailError' => '',
        'prof_picError' => ''
        

    ];

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
            'admin' => $admin,
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'prof_pic' =>  $_POST['prof_pic'],
            'nameError' => '',
            'emailError' => '',
            'prof_picError' => ''
            
    
        ];

        if(empty($data['name'])){
            $data['nameError'] = "The  name field cannot be empty";
        }

        if(empty($data['email'])){
            $data['emailError'] = "The email field cannot be empty";
        }

         /*error messages are empty*/
         if(empty($data['nameError']) && empty($data['emailError'])){
            if($this->adminModel->changeProfile($data)){
                header("Location: ". URLROOT . "/admins/admin_profile"); //redirect to
            }else{
                die('Something went wrong.');
            }
        }
         else{
            $this->view('admins/admin_profile', $data);
        }

    }

    $this->view('admins/admin_profile', $data);
          
}










/////////////////////// Admin Change password///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function admin_change_password() {

            
        $data = [
            'cpassword' =>'',
            'new-password' =>'',
            'confirm-password' =>'',
            'cpasswordError' =>'',
            'new-passwordError' =>'',
            'confirm-passwordError' =>'',
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
                'confirm-passwordError' =>'',
            ];


            //Validate confirm password
            if (empty($data['confirm-password'])) {
                $data['confirm-passwordError'] = 'Please enter confirm password.';
            } else {
                if ($data['new-password'] != $data['confirm-password']) {
                $data['confirm-passwordError'] = 'Passwords do not match, please try again.';
                }
            }

            if(empty($data['confirm-passwordError'])){
                $admin = $this->adminModel->findAdminPassword();

                $Passworddata = [
                    'admin' => $admin
                ];

                if ($data['cpassword'] == $Passworddata['admin'][0]->password ){
                    if ($this->adminModel->changePassword($data)) {
                        //Redirect to the login page
                        header('location: ' . URLROOT . '/admins/admin_change_password');
                    } else {
                        die('Something went wrong.');
                    }  
            } else{
                $data['cpasswordError'] = 'Passwords do not match, please try again.';
            }
        $this-> view('admins/admin_change_password', $data);
            }
    }
           
    $this->view('admins/admin_change_password', $data);
          
}









    

////////////////////////  Registered Users //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        public function admin_registered_users() {

            $com  = $this->adminModel->findAllComapny();
            $cus = $this->adminModel->findAllCustomer();
            $wor = $this->adminModel->findAllWorker();
          
            $data = [
                'com' => $com,
                'cus' => $cus,
                'wor' => $wor

            ];

            $this->view('admins/admin_registered_users', $data);
          
        }


    }
