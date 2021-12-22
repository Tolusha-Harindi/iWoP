<?php
    class Customers extends Controller {
        public function __construct() {
            //$this->pageModel = $this->model('Page');
        }

        public function manager_category() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'manager_category page',
                //'users' => $users

            ];

            $this->view('managers/manager_category', $data);
          
        }

        public function manager_company() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'manager_company page',
                //'users' => $users

            ];

            $this->view('managers/manager_company', $data);
          
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

        public function manager_profile() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'manager_profile page',
                //'users' => $users

            ];

            $this->view('managers/manager_profile', $data);
          
        }

        public function manager_service_providers() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'manager_service_providers page',
                //'users' => $users

            ];

            $this->view('managers/manager_service_providers', $data);
          
        }
}