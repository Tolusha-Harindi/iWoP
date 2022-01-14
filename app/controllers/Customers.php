<?php
    class Customers extends Controller {
        public function __construct() {
            $this->customerModel = $this->model('Customer');
        }

        public function customer_category() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'customer_category page',
                //'users' => $users

            ];

            $this->view('customers/customer_category', $data);
          
        }

        public function customer_dashboard() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'customer_dashboard page',
                //'users' => $users

            ];

            $this->view('customers/customer_dashboard', $data);
          
        }

        public function customer_profile() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'customer_profile page',
                //'users' => $users

            ];

            $this->view('customers/customer_profile', $data);
          
        }

        public function customer_recent_workers() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'customer_recent_workers page',
                //'users' => $users

            ];

            $this->view('customers/customer_recent_workers', $data);
          
        }

        public function customer_responses() {
            if(!isLoggedIn()){
                header("Location: " . URLROOT . "/customers");
            }

            $newPosts = $this->customerModel-> postNewAds();  /*postNewads() function created inside the customer file*/

        
            //pass to view
            $data = [
                'newPosts' => $newPosts, /*$newPost variable that we have*/
                'category' => '',
                'title' => '',
                'description' => '',
                'address' => '',
                'contact' => '',
                'start_date' => '',
                'end_date' => '',
                'budget' => '',
                'work' => '',
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

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //die("It works");
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'cus_id' => $_SESSION['cus_id'],
                    'category' => trim($_POST['category']) ,
                    'title' => trim($_POST['title']) ,
                    'description' => trim($_POST['description']) ,
                    'address' => trim($_POST['address']) ,
                    'contact' => trim($_POST['contact']) ,
                    'start_date' => trim($_POST['start_date']) ,
                    'end_date' => trim($_POST['end_date']) ,
                    'budget' => trim($_POST['budget']) ,
                    'work' => trim($_POST['work']) ,
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

                /*error messages are empty*/
                if(empty($data['categoryError']) && empty($data['titleError']) && empty($data['descriptionError']) && empty($data['addressError']) && empty($data['contactError']) && empty($data['start_dateError']) && empty($data['end_dateError']) && empty($data['budgetError']) && empty($data['workError'])){
                    if($this->customerModel->addpost($data)){
                        header("Location: ". URLROOT . "/customers/customer_responses"); //redirect to
                    }else{
                        echo "<script>alert('Something went wrong, Please try again!'); </script>";
                    }
                }
            else{
                $this->view('customers/customer_responses', $data);
                }
            }

            $this->view('customers/customer_responses', $data);
          
        }

        public function customer_service_providers() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'customer_service_providers page',
                //'users' => $users

            ];

            $this->view('customers/customer_service_providers', $data);
          
        }

        public function customer_chat() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'customer_chat page',
                //'users' => $users

            ];

            $this->view('customers/customer_chat', $data);
          
        }
    
}