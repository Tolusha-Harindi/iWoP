<?php
    class Admins extends Controller {
        public function __construct() {
            $this->adminModel = $this->model('Admin');
        }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        public function admin_category() {

            // if(!isLoggedIn()){
            //     header("Location: " . URLROOT . "/admins");
            // }

            $add = $this->adminModel->findAllCategory();

            $data = [
                'add'  => $add,
                'category' => '',
                'logo' => '',
                'add_date' => '',
                'categoryError' => '',
                'logoError' => ''
            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 

                $data = [
                    'add'  => $add,
                    // 'admin_id' => $_SESSION['admin_id'],
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





/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        public function admin_complaints() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'admin_complaints page',
                //'users' => $users

            ];

            $this->view('admins/admin_complaints', $data);
          
        }

        public function admin_dashboard() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'admin_dashboard page',
                //'users' => $users

            ];

            $this->view('admins/admin_dashboard', $data);
          
        }






/////////////////////  FAQ      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        
/*------------------------ Add FAQ --------------------------------------------------------------------------------------------------------------------------------------------------*/
public function admin_faq() {

            $faq = $this->adminModel->findAllQuestions();

            if(!isLoggedIn()){
                header("Location: "  . URLROOT . "/admins");
            }

            $data = [
                'faq' => $faq,
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
            'answerError' => ''
        ];


        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


            $data = [
                'faq_id' => $faq_id,
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
                    header("Location: " . URLROOT . "/admins/update_faq");
                 
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
    public function deleteManager($manager_id){
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
    





        public function admin_pendingads() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'admin_pendingads page',
                //'users' => $users

            ];

            $this->view('admins/admin_pendingads', $data);
          
        }

        public function admin_profile() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'admin_profile page',
                //'users' => $users

            ];

            $this->view('admins/admin_profile', $data);
          
        }


        public function admin_registered_users() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'admin_registered_users page',
                //'users' => $users

            ];

            $this->view('admins/admin_registered_users', $data);
          
        }


    }
