<?php
    class Logins extends Controller {
        public function __construct() {
            $this->loginModel = $this->model('Login');
        }

        public function login() {
            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'login page',
                'emailError' =>'',
                'passwordError' => ''
                //'users' => $users

            ];

            $this->view('logins/login', $data);
          
        }

        public function register() {
            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'register page',
                //'users' => $users

            ];

            $this->view('logins/register', $data);
          
        }

        public function worker_register() {
            //$users = $this->pageModel-> getUsers();
            $data = [
                'fname' => '',
                'lname' => '',
                'contact' => '',
                'nic' => '',
                'email' => '',
                'password' => '',
                're-enterpassword' => '',
                'firstnameError' =>'',
                'lastnameError' => '',
                //'nameError' => '',
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
                    //'nameError' =>'',
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
                        $data['firstnameError'] = 'Please enter First name';
                    }
                    elseif (!preg_match($nameValidation, $data['fname'])){
                        $data['firstnameError'] = 'Name can only contain letters and numbers';
                    }
                     //validate last name on letters/numbers
                     if(empty($data['lname'])){
                        $data['lastnameError'] = 'Please enter Last name';
                    }
                    elseif (!preg_match($nameValidation, $data['lname'])){
                        $data['lastnameError'] = 'Name can only contain letters and numbers';
                    }

                     //validating Contact
                     if(empty($data['contact'])){
                        $data['contactError'] = 'Please Enter the Contact';
                    }
                    elseif (!preg_match($contactValidation, $data['contact'])){
                        $data['contactError'] = 'Please enter valid contact number';
                    }

                    //validating NIC
                    if(empty($data['nic'])){
                        $data['nicError'] = 'Please Enter the NIC number';
                    }
                    elseif (!preg_match($nicValidation, $data['nic'])){
                        $data['nicError'] = 'Please enter valid NIC number';
                    }

                    /*-----------------------------------------------------------------------------------*/
                    //validate email on letters/numbers
                    if(empty($data['email'])){
                        $data['emailError'] = 'Please enter your email';
                    }
                    elseif(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
                        $data['emailError'] = 'Please enter Correct format';
                    }
                    else{
                        //check if email exists
                        if($this->loginModel->findLoginByEmail($data['email'])){
                            $data['emailError'] = 'Email is already taken';
                        }
                    }

                    //Validate password on length and numeric values
                    if(empty($data['password'])){
                        $data['passwordError'] ='Please enter password';
                    }
                    elseif(strlen($data['password'] < 6)){
                        $data['passwordError'] ='password must be atleast 6  characters';
                    }
                    elseif (preg_match($passwordValidation, $data['password'])){
                        $data['passwordError'] = 'Password must have at least one numeric value.';
                    }

                    //validate confirm password
                    if(empty($data['re-enterpassword'])){
                        $data['re-enterpasswordError'] ='Please enter password again';
                    }
                    else{
                        if($data['password'] !=$data['re-enterpassword']){
                            $data['re-enterpasswordError'] = 'Passwords do not match, Please enter correct password';
                        }
                    }

                   
                    //Make sure that errors are empty
                    if(empty($data['firstnameError']) && empty($data['lastnameError']) && empty($data['contactError']) && empty($data['nicError']) && empty($data['emailError']) && empty($data['passwordError'])&& empty($data['re-enterpasswordError'])){
                        
                        //hash password
                        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                        //Register user from model function
                        if($this->loginModel->worker_register($data)){
                            //Redirect to the login page
                            header('location: ' . URLROOT . '/logins/login');
                        }
                        else{
                            die('Something went wrong');
                        }
                    }
            }


            $this->view('logins/worker_register', $data);
          
        }

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
                        $data['firstnameError'] = 'Please enter First name';
                    }
                    elseif (!preg_match($nameValidation, $data['fname'])){
                        $data['firstnameError'] = 'Name can only contain letters and numbers';
                    }
                     //validate last name on letters/numbers
                     if(empty($data['lname'])){
                        $data['lastnameError'] = 'Please enter Last name';
                    }
                    elseif (!preg_match($nameValidation, $data['lname'])){
                        $data['lastnameError'] = 'Name can only contain letters and numbers';
                    }

                     //validating Contact
                     if(empty($data['contact'])){
                        $data['contactError'] = 'Please Enter the Contact';
                    }
                    elseif (!preg_match($contactValidation, $data['contact'])){
                        $data['contactError'] = 'Please enter valid contact number';
                    }

                    /*-----------------------------------------------------------------------------------*/
                    //validate email on letters/numbers
                    if(empty($data['email'])){
                        $data['emailError'] = 'Please enter your email';
                    }
                    elseif(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
                        $data['emailError'] = 'Please enter Correct format';
                    }
                    else{
                        //check if email exists
                        if($this->loginModel->findLoginByEmail($data['email'])){
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
                        $data['passwordError'] ='Please enter password';
                    }
                    elseif(strlen($data['password'] < 6)){
                        $data['passwordError'] ='password must be atleast 6  characters';
                    }
                    elseif (preg_match($passwordValidation, $data['password'])){
                        $data['passwordError'] = 'Password must have at least one numeric value.';
                    }

                    //validate confirm password
                    if(empty($data['re-enterpassword'])){
                        $data['re-enterpasswordError'] ='Please enter password again';
                    }
                    else{
                        if($data['password'] !=$data['re-enterpassword']){
                            $data['re-enterpasswordError'] = 'Passwords do not match, Please enter correct password';
                        }
                    }

                   

                    //Make sure that errors are empty
                    if(empty($data['firstnameError']) && empty($data['lastnameError']) && empty($data['contactError']) && empty($data['emailError']) && empty($data['addressError']) && empty($data['passwordError'])&& empty($data['re-enterpasswordError'])){
                        
                        //hash password
                        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                        //Register user from model function
                        if($this->loginModel->customer_register($data)){
                            //Redirect to the login page
                            header('location: ' . URLROOT . '/logins/login');
                        }
                        else{
                            die('Something went wrong');
                        }
                    }
            }

            $this->view('logins/customer_register', $data);
          
        }

        public function company_register() {
            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'company_register page',
                //'users' => $users

            ];

            $this->view('logins/company_register', $data);
          
        }

    }