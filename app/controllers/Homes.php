<?php
    class Homes extends Controller {
        public function __construct() {
            $this->homeModel = $this->model('Home');
        }

        public function index() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'Landing page',
                //'users' => $users

            ];

            $this->view('homes/landing', $data);
          
        }






//////////////////////////////////     FAQ     ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        public function faq() {

            $faq = $this->homeModel-> findFAQ();

            $data = [
                'faq' => $faq

            ];

            $this->view('homes/faq', $data);
          
        }







/////////////////////////////    Home  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        public function home() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'home page',
                //'users' => $users

            ];

            $this->view('homes/home', $data);
          
        }

    }