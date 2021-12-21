<?php
    class Logins extends Controller {
        public function __construct() {
            //$this->pageModel = $this->model('Page');
        }

        public function login() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'Login page',
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
                'title' => 'Worker register page',
                //'users' => $users

            ];

            $this->view('logins/worker_register', $data);
          
        }

        public function customer_register() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'Customer register page',
                //'users' => $users

            ];

            $this->view('logins/customer_register', $data);
          
        }

        public function company_register() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'Company register page',
                //'users' => $users

            ];

            $this->view('logins/company_register', $data);
          
        }

    }