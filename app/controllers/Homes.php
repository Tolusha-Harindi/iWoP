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

    }