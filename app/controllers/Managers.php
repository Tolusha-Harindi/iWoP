<?php
  class Managers extends Controller {
    public function __construct() {
        $this->managerModel = $this->model('Manager');
        
    }
    

        public function manager_category() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'manager_category page',
                //'users' => $users

            ];

            $this->view('managers/manager_category', $data);
          
        }

        

        public function manager_dashboard() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'manager_dashboard page',
                //'users' => $users

            ];

            $this->view('managers/manager_dashboard', $data);
          
        }

        public function manager_pending_requests() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'manager_pending_requests page',
                //'users' => $users

            ];

            $this->view('managers/manager_pending_requests', $data);
          
        }

       

       
		
		

////////////////////////////////////////////// Manager Profile /////////////////////////////////////////////////////////////////////////////////////////////////////
public function manager_profile() {

    if(!isLoggedIn()){
        header("Location: " . URLROOT . "/managers");
    }

    $manager = $this->managerModel->findManagerDetails();


    $data = [
        'manager' => $manager,
        'name' => '',
        'contact' => '',
        'email' => '',
        'address' => '',
        'profile' => '',
        'nameError' => '',
        'contactError' => '',
        'emailError' => '',
        'addressError' => '',
        'profileError' => ''
        

    ];

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
            'manager' => $manager,
            'name' => $_POST['name'],
            'contact' => $_POST['contact'],
            'email' => $_POST['email'],
            'address' => $_POST['address'],
            'profile' =>  $_POST['profile'],
            'nameError' => '',
            'contactError' => '',
            'emailError' => '',
            'addressError' => '',
            'profileError' => ''
            
        ];

        if(empty($data['name'])){
            $data['nameError'] = "The  name field cannot be empty";
        }
		
		if(empty($data['contact'])){
            $data['contactError'] = "The  name field cannot be empty";
        }

        if(empty($data['email'])){
            $data['emailError'] = "The email field cannot be empty";
        }
		
		if(empty($data['address'])){
            $data['addressError'] = "The  name field cannot be empty";
        }

         /*error messages are empty*/
         if(empty($data['nameError']) && empty($data['contactError']) && empty($data['emailError']) && empty($data['addressError'])){
            if($this->managerModel->changeProfile($data)){
                header("Location: ". URLROOT . "/managers/manager_profile"); //redirect to
            }else{
                die('Something went wrong.');
            }
        }
         else{
            $this->view('managers/manager_profile', $data);
        }

    }

         $this->view('managers/manager_profile', $data); 
}










/////////////////////// Manager Change password/////////////////////////////////////////////////////////////////
    public function manager_change_password() {

            
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
                $manager = $this->managerModel->findManagerPassword();

                $Passworddata = [
                    'manager' => $manager
                ];

                if ($data['cpassword'] == $Passworddata['manager'][0]->password ){
                    if ($this->managerModel->changePassword($data)) {
                        //Redirect to the login page
                        header('location: ' . URLROOT . '/managers/manager_change_password');
                    } else {
                        die('Something went wrong.');
                    }  
            } else{
                $data['cpasswordError'] = 'Passwords do not match, please try again.';
            }
        $this-> view('managers/manager_change_password', $data);
            }
    }
           
    $this->view('managers/manager_change_password', $data);
          

}
	  
	  
	  
	  
	  
	  
	public function manager_company() {

            $com  = $this->managerModel->findAllComapny();
            $wor = $this->managerModel->findAllWorker();
          
            $data = [
                'com' => $com,
                'wor' => $wor

            ];

            $this->view('managers/manager_company', $data);
          
        }  
	  
	  
	  
	  public function manager_service_providers() {

            $com  = $this->managerModel->findAllComapny();
            $wor = $this->managerModel->findAllWorker();
          
            $data = [
                'com' => $com,
                'wor' => $wor

            ];

            $this->view('managers/manager_service_providers', $data);
          
        }  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
}