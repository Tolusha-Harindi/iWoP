<?php
    class Homes extends Controller {
        public function __construct() {
            //$this->pageModel = $this->model('Page');
        }

        public function index() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'Landing page',
                //'users' => $users

            ];

            $this->view('homes/landing', $data);
          
        }

        public function faq() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'faq page',
                //'users' => $users

            ];

            $this->view('homes/faq', $data);
          
        }

        public function home() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'home page',
                //'users' => $users

            ];

            $this->view('homes/home', $data);
          
        }

    }