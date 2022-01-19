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

        public function admin_faq() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'admin_faq page',
                //'users' => $users

            ];

            $this->view('admins/admin_faq', $data);
          
        }

        public function admin_manager() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'admin_manager page',
                //'users' => $users

            ];

            $this->view('admins/admin_manager', $data);
          
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
