<?php
    class Companies extends Controller {
        public function __construct() {
            //$this->pageModel = $this->model('Page');
        }

        public function company_ads() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'company_ads page',
                //'users' => $users

            ];

            $this->view('companies/company_ads', $data);
          
        }

        public function company_category() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'company_category page',
                //'users' => $users

            ];

            $this->view('companies/company_category', $data);
          
        }

        public function company_dashboard() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'company_dashboard page',
                //'users' => $users

            ];

            $this->view('companies/company_dashboard', $data);
          
        }

        public function company_inviteforjob() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'company_inviteforjob page',
                //'users' => $users

            ];

            $this->view('companies/company_inviteforjob', $data);
          
        }

        public function company_profile() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'company_profile page',
                //'users' => $users

            ];

            $this->view('companies/company_profile', $data);
          
        }

        public function company_profileforworkers() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'company_profileforworkers page',
                //'users' => $users

            ];

            $this->view('companies/company_profileforworkers', $data);
          
        }

        public function company_profilesforworkernew() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'company_profilesforworkernew page',
                //'users' => $users

            ];

            $this->view('companies/company_profilesforworkernew', $data);
          
        }

        public function companyverify() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'companyverify page',
                //'users' => $users

            ];

            $this->view('companies/companyverify', $data);
          
        }

    }