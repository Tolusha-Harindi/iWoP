<?php
    class includes extends Controller {
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

        public function topnav2() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'topnav2',
                //'users' => $users

            ];

            $this->view('includes/topnav2', $data);
          
        }

        public function footer() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'footer',
                //'users' => $users

            ];

            $this->view('includes/footer', $data);
          
        }

        public function admin_sidenav() {

            $adname = $this->includModel->findName();

            
            
            $data = [
                'adname' => $adname
                
            ];

            $this->view('includes/admin_sidenav', $data);
          
        }

        public function company_sidenav() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'company_sidenav',
                //'users' => $users

            ];

            $this->view('includes/company_sidenav', $data);
          
        }

        public function customer_sidenav() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'customer_sidenav',
                //'users' => $users

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

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'worker_sidenav',
                //'users' => $users

            ];

            $this->view('includes/worker_sidenav', $data);
          
        }


    }
