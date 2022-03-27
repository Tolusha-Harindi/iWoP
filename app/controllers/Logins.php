<?php
    class Logins extends Controller {
        public function __construct() {
            $this->loginModel = $this->model('Login');
        }


////  Login as /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        public function loginas() {
            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'login page',

            ];

            $this->view('logins/loginas', $data);
          
        }






/////    Register as ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        public function register() {
            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'register page',
                //'users' => $users

            ];

            $this->view('logins/register', $data);
          
        }
       
/////////////////worker register///////////////////////////////////////////////////////////////////////////////////////////////////////////
public function worker_register() {
            
            $data = [
                'fname' => '',
                'lname' => '',
                'contact' => '',
                'nic' => '',
                'email' => '',
                'password' => '',
                'verify_token' => '',
                're-enterpassword' => '',
                'firstnameError' =>'',
                'lastnameError' => '',
                'contactError' => '',
                'nicError' => '',
                'emailError' => '',
                'passwordError' => '',
                're-enterpasswordError' => ''

            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //Sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                
                $data = [
                    'fname' => trim($_POST['fname']),
                    'lname' => trim($_POST['lname']),
                    'contact' => trim($_POST['contact']),
                    'nic' => trim($_POST['nic']),
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    're-enterpassword' => trim($_POST['re-enterpassword']),
                    'verify_token' => md5(rand()),
                    'firstnameError' =>'',
                    'lastnameError' => '',
                    'contactError' => '',
                    'nicError' => '',
                    'emailError' => '',
                    'passwordError' => '',
                    're-enterpasswordError' => '',
                ];
                    $nameValidation = "/^[a-zA-Z0-9]*$/";
                    $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";
                    $contactValidation ="/^\d{10}$/";
                    $nicValidation = "/^[0-9]{9}[vVxX]$/";
                    

                    //validate first name on letters/numbers
                    if(empty($data['fname'])){
                        $data['firstnameError'] = 'Please Enter First name';
                    }
                    elseif (!preg_match($nameValidation, $data['fname'])){
                        $data['firstnameError'] = 'Name can only contain letters and numbers';
                    }
                     //validate last name on letters/numbers
                     if(empty($data['lname'])){
                        $data['lastnameError'] = 'Please Enter Last name';
                    }
                    elseif (!preg_match($nameValidation, $data['lname'])){
                        $data['lastnameError'] = 'Name can only contain letters and numbers';
                    }

                     //validating Contact
                     if(empty($data['contact'])){
                        $data['contactError'] = 'Please Enter the Contact';
                    }
                    elseif (!preg_match($contactValidation, $data['contact'])){
                        $data['contactError'] = 'Please Enter valid contact number';
                    }

                    //validating NIC
                    if(empty($data['nic'])){
                        $data['nicError'] = 'Please Enter the NIC number';
                    }
                    elseif (!preg_match($nicValidation, $data['nic'])){
                        $data['nicError'] = 'Please Enter valid NIC number';
                    }

                    /*-----------------------------------------------------------------------------------*/
                    //validate email on letters/numbers
                    if(empty($data['email'])){
                        $data['emailError'] = 'Please Enter your email';
                    }
                    elseif(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
                        $data['emailError'] = 'Please Enter Correct format';
                    }
                    else{
                        //check if email exists
                        if($this->loginModel->findWorkerByEmail($data['email'])){
                            $data['emailError'] = 'Email is already taken';
                        }
                    }

                    //Validate password on length and numeric values
                    if(empty($data['password'])){
                        $data['passwordError'] ='Please Enter password';
                    }
                    elseif(strlen($data['password'] < 6)){
                        $data['passwordError'] ='password must be atleast 6  characters';
                    }
                    elseif (preg_match($passwordValidation, $data['password'])){
                        $data['passwordError'] = 'Password must have at least one numeric value.';
                    }

                    //validate confirm password
                    if(empty($data['re-enterpassword'])){
                        $data['re-enterpasswordError'] ='Please Enter password again';
                    }
                    else{
                        if($data['password'] !=$data['re-enterpassword']){
                            $data['re-enterpasswordError'] = 'Passwords do not match, Please Enter correct password';
                        }
                    }

                   
                    //Make sure that errors are empty
                    if(empty($data['firstnameError']) && empty($data['lastnameError']) && empty($data['contactError']) && empty($data['nicError']) && empty($data['emailError']) && empty($data['passwordError'])&& empty($data['re-enterpasswordError'])){
                        
                        //hash password
                        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                        //Register user from model function
                        if($this->loginModel->worker_register($data)){
                            //$this->sendmail_verify($data['fname'], $data['email'], $data['verify_token']);
                            //Redirect to the login page
                            header('location: ' . URLROOT . '/logins/worker_login');
                            
                        }
                        else{
                            die('Something went wrong');
                        }
                    }
            }else{
                $data = [
                    'fname' => '',
                    'lname' => '',
                    'contact' => '',
                    'nic' => '',
                    'email' => '',
                    'password' => '',
                    're-enterpassword' => '',
                    'verify_token'=> '',
                    'firstnameError' =>'',
                    'lastnameError' => '',
                    'contactError' => '',
                    'nicError' => '',
                    'emailError' => '',
                    'passwordError' => '',
                    're-enterpasswordError' => ''
    
                ];
            }
            $this->view('logins/worker_register', $data);
          
        }

        public function worker_new_account(){
            $data = [
                'title'=>'New Account'
            ];
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                
                header('location: ' . URLROOT . '/workers/worker_new_profile');
            }

            $this->view('logins/worker_new_account', $data);
        }

/*-------------------------------------Worker login --------------------------------------------------------------------*/
        public function Worker_login() {
            //$users = $this->pageModel-> getUsers();
            $data = [
                'email' => '',
                'password' =>'',
                'emailError' =>'',
                'passwordError' => ''
        
            ];
        
              //check for post data
              if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // Process form
                // Sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
                      $data = [
                        'email' => trim($_POST['email']),
                        'password' => trim($_POST['password']),
                        'emailError' => '',
                        'passwordError' => '' 
                      ];
        
                //Validate email
                if(empty($data['email'])){
                    $data['emailError'] = 'Please enter email.';
                }
        
                //Validate password
                if(empty($data['password'])){
                    $data['passwordError'] = 'Please enter password.';
                }
                 //check if all errors are empty
                 if(empty($data['emailError']) && empty($data['passwordError'])){
                    $loggedInWorker = $this->loginModel->Worker_login($data['email'], $data['password']);
                
                if ($loggedInWorker) {
                    $this->createWorkerSession($loggedInWorker);
                } else {
                    $data['passwordError'] = 'Password or Email is incorrect. Please try again.';
        
                    $this->view('logins/Worker_login', $data);
                }
            }
            }else{
                $data = [
                    'email' => '',
                    'password' => '',
                    'emailError' => '',
                    'passwordError' => '' 
                ];
            }
        
            $this->view('logins/worker_login', $data);
          
        }
        
        public function createWorkerSession($user) {
            //session_start();
            $_SESSION['worker_id'] = $user->worker_id;
            $_SESSION['fname'] = $user->fname;
            $_SESSION['email'] = $user->email;
            
            $data=$this->loginModel->findById($_SESSION['worker_id']);
            if($data!=null){
                header('location:' . URLROOT . '/workers/worker_dashboard');
            }else{
                header('location:' . URLROOT . '/logins/worker_new_account');
            }
            
    
        }
    
        public function Workerlogout() {
            unset($_SESSION['worker_id']);
            unset($_SESSION['fname']);
            unset($_SESSION['email']);

            header('location:' . URLROOT . '/logins/loginas');
        }












////  customer register  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        public function customer_register() {
            //$users = $this->pageModel-> getUsers();
            $data = [
                'fname' => '',
                'lname' => '',
                'contact' => '',
                'email' => '',
                'address' => '',
                'password' => '',
                're-enterpassword' => '',
                'firstnameError' =>'',
                'lastnameError' => '',
                //'nameError' => '',
                'contactError' => '',
                'emailError' => '',
                'addressError' => '',
                'passwordError' => '',
                're-enterpasswordError' => ''

            ];
            
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //Sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                
                $data = [
                    //'name' => trim($_POST['name']),
                    'fname' => trim($_POST['fname']),
                    'lname' => trim($_POST['lname']),
                    'contact' => trim($_POST['contact']),
                    'email' => trim($_POST['email']),
                    'address' => trim($_POST['address']),
                    'password' => trim($_POST['password']),
                    're-enterpassword' => trim($_POST['re-enterpassword']),
                    //'nameError' =>'',
                    'firstnameError' =>'',
                    'lastnameError' => '',
                    'contactError' => '',
                    'emailError' => '',
                    'addressError' => '',
                    'passwordError' => '',
                    're-enterpasswordError' => '',
                ];
                    $nameValidation = "/^[a-zA-Z0-9]*$/";
                    $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";
                    $contactValidation ="/^\d{10}$/";
                    //$addressValidation = " ";

                    //validate first name on letters/numbers
                    if(empty($data['fname'])){
                        $data['firstnameError'] = 'Please Enter First name';
                    }
                    elseif (!preg_match($nameValidation, $data['fname'])){
                        $data['firstnameError'] = 'Name can only contain letters and numbers';
                    }
                     //validate last name on letters/numbers
                     if(empty($data['lname'])){
                        $data['lastnameError'] = 'Please Enter Last name';
                    }
                    elseif (!preg_match($nameValidation, $data['lname'])){
                        $data['lastnameError'] = 'Name can only contain letters and numbers';
                    }

                     //validating Contact
                     if(empty($data['contact'])){
                        $data['contactError'] = 'Please Enter the Contact';
                    }
                    elseif (!preg_match($contactValidation, $data['contact'])){
                        $data['contactError'] = 'Please Enter valid contact number';
                    }

                    /*-----------------------------------------------------------------------------------*/
                    //validate email on letters/numbers
                    if(empty($data['email'])){
                        $data['emailError'] = 'Please Enter your email';
                    }
                    elseif(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
                        $data['emailError'] = 'Please Enter Correct format';
                    }
                    else{
                        //check if email exists
                        if($this->loginModel->findCustomerByEmail($data['email'])){
                            $data['emailError'] = 'Email is already taken';
                        }
                    }

                     //validating address
                     if(empty($data['address'])){
                        $data['addressError'] = 'Please Enter the address';
                    }
                    // else if (!preg_match($addressValidation, $data['address'])){
                    //     $data['addressError'] = 'Enter valid address';
                    // }

                    //Validate password on length and numeric values
                    if(empty($data['password'])){
                        $data['passwordError'] ='Please Enter password';
                    }
                    elseif(strlen($data['password'] < 6)){
                        $data['passwordError'] ='password must be atleast 6  characters';
                    }
                    elseif (preg_match($passwordValidation, $data['password'])){
                        $data['passwordError'] = 'Password must have at least one numeric value.';
                    }

                    //validate confirm password
                    if(empty($data['re-enterpassword'])){
                        $data['re-enterpasswordError'] ='Please Enter password again';
                    }
                    else{
                        if($data['password'] !=$data['re-enterpassword']){
                            $data['re-enterpasswordError'] = 'Passwords do not match, Please Enter correct password';
                        }
                    }

                   

                    //Make sure that errors are empty
                    if(empty($data['firstnameError']) && empty($data['lastnameError']) && empty($data['contactError']) && empty($data['emailError']) && empty($data['addressError']) && empty($data['passwordError'])&& empty($data['re-enterpasswordError'])){
                        
                        //hash password
                        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                        //Register user from model function
                        if($this->loginModel->customer_register($data)){
                            //Redirect to the login page
                            header('location: ' . URLROOT . '/logins/customer_login');
                        }
                        else{
                            die('Something went wrong');
                        }
                    }
            }else{
                $data = [
                    'fname' => '',
                    'lname' => '',
                    'contact' => '',
                    'email' => '',
                    'address' => '',
                    'password' => '',
                    're-enterpassword' => '',
                    'firstnameError' =>'',
                    'lastnameError' => '',
                    //'nameError' => '',
                    'contactError' => '',
                    'emailError' => '',
                    'addressError' => '',
                    'passwordError' => '',
                    're-enterpasswordError' => ''
                ];
            }
            $this->view('logins/customer_register', $data);
          
        }

/*----------------------------------------------Customer login -------------------------------------------------------------------*/
public function Customer_login() {
    //$users = $this->pageModel-> getUsers();
    $data = [
        'email' => '',
        'password' =>'',
        'emailError' =>'',
        'passwordError' => ''

    ];

      //check for post data
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

              $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'emailError' => '',
                'passwordError' => '' 
              ];

        //Validate email
        if(empty($data['email'])){
            $data['emailError'] = 'Please enter email.';
        }

        //Validate password
        if(empty($data['password'])){
            $data['passwordError'] = 'Please enter password.';
        }
         //check if all errors are empty
         if(empty($data['emailError']) && empty($data['passwordError'])){
            $loggedInCustomer = $this->loginModel->Customer_login($data['email'], $data['password']);
        
        if ($loggedInCustomer) {
            $this->createCustomerSession($loggedInCustomer);
        } else {
            $data['passwordError'] = 'Password or Email is incorrect. Please try again.';

            $this->view('logins/Customer_login', $data);
        }
    }
    }else{
        $data = [
            'email' => '',
            'password' => '',
            'emailError' => '',
            'passwordError' => '' 
        ];
    }

    $this->view('logins/customer_login', $data);
  
}

    public function createCustomerSession($user) {
        //session_start();
        $_SESSION['cus_id'] = $user->cus_id;
        $_SESSION['firstname'] = $user->firstname;
        $_SESSION['email'] = $user->email;

        header('location:' . URLROOT . '/customers/customer_dashboard');

    }

    public function logout() {
        unset($_SESSION['cus_id']);
        unset($_SESSION['firstname']);
        unset($_SESSION['email']);
        header('location:' . URLROOT . '/logins/loginas');
    }
    








////   company register /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        public function company_register() {
            //$users = $this->pageModel-> getUsers();
            $data = [
                'com_name' => '',
                'contact' => '',
                'reg_no' => '',
                'email' => '',
                'password' => '',
                're-enterpassword' => '',
                'nameError' => '',
                'contactError' => '',
                'reg_noError' => '',
                'emailError' => '',
                'passwordError' => '',
                're-enterpasswordError' => ''

            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //Sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                
                $data = [
                    'com_name' => trim($_POST['com_name']),
                    'contact' => trim($_POST['contact']),
                    'reg_no' => trim($_POST['reg_no']),
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    're-enterpassword' => trim($_POST['re-enterpassword']),
                    'nameError' => '',
                    'contactError' => '',
                    'reg_noError' => '',
                    'emailError' => '',
                    'passwordError' => '',
                    're-enterpasswordError' => '',
                ];
                    $nameValidation = "/^[a-zA-Z0-9]*$/";
                    $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";
                    $contactValidation ="/^\d{10}$/";
                    $reg_noValidation = "/^\d{9}$/";
                    //$reg_noValidation = "/^[\d/]{14}$/";
                   
                     //validate company name on letters/numbers
                     if(empty($data['com_name'])){
                        $data['nameError'] = 'Please Enter Company name';
                    }
                    elseif (!preg_match($nameValidation, $data['com_name'])){
                        $data['nameError'] = 'Name can only contain letters and numbers';
                    }

                     //validating Contact
                     if(empty($data['contact'])){
                        $data['contactError'] = 'Please Enter the Contact';
                    }
                    elseif (!preg_match($contactValidation, $data['contact'])){
                        $data['contactError'] = 'Please Enter valid contact number';
                    }

                    //validating company registerd number
                    if(empty($data['reg_no'])){
                        $data['reg_noError'] = 'Please Enter the company register number';
                    }
                    elseif (!preg_match($reg_noValidation, $data['reg_no'])){
                        $data['reg_noError'] = 'Please Enter valid comapny registered number';
                    }

                    /*-----------------------------------------------------------------------------------*/
                    //validate email on letters/numbers
                    if(empty($data['email'])){
                        $data['emailError'] = 'Please Enter your email';
                    }
                    elseif(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
                        $data['emailError'] = 'Please Enter Correct format';
                    }
                    else{
                        //check if email exists
                        if($this->loginModel->findCompanyByEmail($data['email'])){
                            $data['emailError'] = 'Email is already taken';
                        }
                    }

                    //Validate password on length and numeric values
                    if(empty($data['password'])){
                        $data['passwordError'] ='Please Enter password';
                    }
                    elseif(strlen($data['password'] < 6)){
                        $data['passwordError'] ='password must be atleast 6  characters';
                    }
                    elseif (preg_match($passwordValidation, $data['password'])){
                        $data['passwordError'] = 'Password must have at least one numeric value.';
                    }

                    //validate confirm password
                    if(empty($data['re-enterpassword'])){
                        $data['re-enterpasswordError'] ='Please Enter password again';
                    }
                    else{
                        if($data['password'] !=$data['re-enterpassword']){
                            $data['re-enterpasswordError'] = 'Passwords do not match, Please Enter correct password';
                        }
                    }

                   
                    //Make sure that errors are empty
                    if(empty($data['nameError'])  && empty($data['contactError']) && empty($data['reg_noError']) && empty($data['emailError']) && empty($data['passwordError'])&& empty($data['re-enterpasswordError'])){
                        
                        //hash password
                        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                        //Register user from model function
                        if($this->loginModel->company_register($data)){
                            //Redirect to the login page
                            header('location: ' . URLROOT . '/logins/company_login');
                        }
                        else{
                            die('Something went wrong');
                        }
                    }
            }else{
                $data = [
                    'com_name' => '',
                    'contact' => '',
                    'reg_no' => '',
                    'email' => '',
                    'password' => '',
                    're-enterpassword' => '',
                    'nameError' => '',
                    'contactError' => '',
                    'reg_noError' => '',
                    'emailError' => '',
                    'passwordError' => '',
                    're-enterpasswordError' => ''
    
                ];
            }


            $this->view('logins/company_register', $data);
          
        }



/*----------------------------------------------Company login -------------------------------------------------------------------*/
        public function Company_login() {
            //$users = $this->pageModel-> getUsers();
            $data = [
                'email' => '',
                'password' =>'',
                'emailError' =>'',
                'passwordError' => ''

            ];

            //check for post data
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // Process form
                // Sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                    $data = [
                        'email' => trim($_POST['email']),
                        'password' => trim($_POST['password']),
                        'emailError' => '',
                        'passwordError' => '' 
                    ];

                //Validate email
                if(empty($data['email'])){
                    $data['emailError'] = 'Please enter email.';
                }

                //Validate password
                if(empty($data['password'])){
                    $data['passwordError'] = 'Please enter password.';
                }
                //check if all errors are empty
                if(empty($data['emailError']) && empty($data['passwordError'])){
                    $loggedInCompany = $this->loginModel->Company_login($data['email'], $data['password']);
                
                if ($loggedInCompany) {
                    $this->createCompanySession($loggedInCompany);
                } else {
                    $data['passwordError'] = 'Password or Email is incorrect. Please try again.';

                    $this->view('logins/Company_login', $data);
                }
            }
            }else{
                $data = [
                    'email' => '',
                    'password' => '',
                    'emailError' => '',
                    'passwordError' => '' 
                ];
            }

            $this->view('logins/company_login', $data);
        
        }

        public function createCompanySession($user) {
            //session_start();
            $_SESSION['reg_no'] = $user->reg_no;
            $_SESSION['com_name'] = $user->com_name;
            $_SESSION['email'] = $user->email;

            header('location:' . URLROOT . '/companies/company_dashboard');

        }

        public function Companylogout() {
            unset($_SESSION['reg_no']);
            unset($_SESSION['com_name']);
            unset($_SESSION['email']);
            header('location:' . URLROOT . '/logins/loginas');
        }




    /////// Admin login //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function Admin_login() {

        $data = [
            'email' => '',
            'password' => '',
            'emailError' => '',
            'passwordError' => '',

        ];

        //check for post data
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
                  $data = [
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'emailError' => '',
                    'passwordError' => '' 
                  ];
            //Validate email
            if(empty($data['email'])){
                $data['emailError'] = 'Please enter email.';
        }

            //Validate password
            if(empty($data['password'])){
                $data['passwordError'] = 'Please enter password.';
            }

            //check if all errors are empty
            if(empty($data['emailError']) && empty($data['passwordError'])){
                $loggedInAdmin = $this->loginModel->Admin_login($data['email'], $data['password']);
            
            if ($loggedInAdmin) {
                $this->createAdminSession($loggedInAdmin);
            } else {
                $data['passwordError'] = 'Password or username is incorrect. Please try again.';

                $this->view('logins/am_login', $data);
            }
        }  
        }else{

            $data = [
                'email' => '',
                'password' => '',
                'emailError' => '',
                'passwordError' => '' 
            ];
        }   
        
       $this-> view('logins/am_login', $data);
    }



    public function createAdminSession($admin) {
        //session_start();
        $_SESSION['admin_id'] = $admin->admin_id;
        $_SESSION['name'] = $admin->name;
        $_SESSION['email'] = $admin->email;
    
        header('location:' . URLROOT . '/admins/admin_dashboard');
    
    }
    
    public function Adminlogout() {
        unset($_SESSION['admin_id']);
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        header('location:' . URLROOT . '/logins/admin_login');
    }

    public function AM_login(){

        $data = [
            'email' => '',
            'password' => '',
            'emailError' => '',
            'passwordError' => '' 
        ];

        $this-> view('logins/am_login',$data);
    }




///// Manager Login ////////////////////////////////////////////////////////////////////////////////////////////////////////
public function Manager_login() {

    $data = [
        'email' => '',
        'password' => '',
        'emailError' => '',
        'passwordError' => '' 
    ];

    //check for post data
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

              $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'emailError' => '',
                'passwordError' => '' 
              ];
        //Validate email
        if(empty($data['email'])){
            $data['emailError'] = 'Please enter email.';
    }

        //Validate password
        if(empty($data['password'])){
            $data['passwordError'] = 'Please enter password.';
        }

        //check if all errors are empty
        if(empty($data['emailError']) && empty($data['passwordError'])){
            $loggedInManager = $this->loginModel->Manager_login($data['email'], $data['password']);
        
        if ($loggedInManager) {
            $this->createManagerSession($loggedInManager);
        } else {
            $data['passwordError'] = 'Password or username is incorrect. Please try again.';

            $this->view('logins/am_login', $data);
        }
    }  
    }else{

        $data = [
            'email' => '',
            'password' => '',
            'emailError' => '',
            'passwordError' => '' 
        ];
    }   
    
   $this-> view('logins/am_login', $data);
}



public function createManagerSession($manager) {
    //session_start();
    $_SESSION['manager_id'] = $manager->manager_id;
    $_SESSION['email'] = $manager->email;

    header('location:' . URLROOT . '/managers/manager_dashboard');

}



public function Managerlogout() {
    unset($_SESSION['manager_id']);
    unset($_SESSION['email']);
    header('location:' . URLROOT . '/logins/am_login');
}

/* public function am_login(){

    $data = [
        'email' => '',
        'password' => '',
        'emailError' => '',
        'passwordError' => '' 
    ];

    $this-> view('logins/am_login',$data);
} */

    }
