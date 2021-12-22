<?php
    class Customers extends Controller {
        public function __construct() {
            //$this->pageModel = $this->model('Page');
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

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'customer_responses page',
                //'users' => $users

            ];

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
    
}