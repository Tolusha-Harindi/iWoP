<?php
    class Admins extends Controller {
        public function __construct() {
            //$this->pageModel = $this->model('Page');
        }

        public function admin_category() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'admin_category page',
                //'users' => $users

            ];

            $this->view('admins/admin_category', $data);
          
        }

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
