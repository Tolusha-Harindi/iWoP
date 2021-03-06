<?php
    class Includes extends Controller {
        public function __construct() {
            $this->includModel = $this->model('Includ');
        }

        public function topnav() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'topnav',
                //'users' => $users

            ];

            $this->view('includes/topnav', $data);
          
        }

        

        public function footer() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'footer',
                //'users' => $users

            ];

            $this->view('includes/footer', $data);
          
        }



///////////////////////////////////////////////////////////        Admin          ////////////////////////////////////////////////////////////////////////////////////////
        public function admin_sidenav() {

            if(!isLoggedIn()){
                header("Location: " . URLROOT . "/includes");
            }
            $adminName = $this->includModel->findName();
 
            $data = [
                'adminName' => $adminName
                
            ];

            $this->view('includes/admin_sidenav', $data);
          
        }






///////////////////////////////////////////////////////  Company       ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        public function company_sidenav() {

            if(!isLoggedIn()){
                header("Location: " . URLROOT . "/includes");
            }

            $company = $this->includModel->findCompany();
            
            $data = [
                'company' => $company

            ];

            $this->view('includes/company_sidenav', $data);
          
        }



////////////////////////////////////////////////  Customer /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        public function customer_sidenav() {

            if(!isLoggedIn()){
                header("Location: " . URLROOT . "/includes");
            }

            $customer = $this->includModel->findCustomer();
            
            $data = [
                'customer' => $customer

            ];

            $this->view('includes/customer_sidenav', $data);
          
        }

        public function manager_sidenav() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'manager_sidenav',
                //'users' => $users

            ];

            $this->view('includes/manager_sidenav', $data);
          
        }

         public function worker_sidenav() {
            $prof = $this->includModel->findWorker();

            $data = [
                'title' => 'worker_sidenav',
                'prof'=> $prof
            ];

            $this->view('includes/worker_sidenav', $data);
          
        }



    }
