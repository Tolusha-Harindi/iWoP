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
    }