<?php
    class Workers extends Controller {
        public function __construct() {
            //$this->pageModel = $this->model('Page');
        }

        public function worker_all_ads() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'worker_all_ads page',
                //'users' => $users

            ];

            $this->view('workers/worker_all_ads', $data);
          
        }

        public function worker_bank_detail() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'worker_bank_detail page',
                //'users' => $users

            ];

            $this->view('workers/worker_bank_detail', $data);
          
        }

        public function worker_bank_edit() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'worker_bank_edit page',
                //'users' => $users

            ];

            $this->view('workers/worker_bank_edit', $data);
          
        }

        public function worker_chat() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'worker_chat page',
                //'users' => $users

            ];

            $this->view('workers/worker_chat', $data);
          
        }

        public function worker_dashboard() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'worker_dashboard page',
                //'users' => $users

            ];

            $this->view('workers/worker_dashboard', $data);
          
        }

        public function worker_job_invite() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'worker_job_invite page',
                //'users' => $users

            ];

            $this->view('workers/worker_job_invite', $data);
          
        }

        public function worker_job_vacanccies() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'worker_job_vacanccies page',
                //'users' => $users

            ];

            $this->view('workers/worker_job_vacanccies', $data);
          
        }

        public function worker_new_profile() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'worker_new_profile page',
                //'users' => $users

            ];

            $this->view('workers/worker_new_profile', $data);
          
        }

        public function worker_payment() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'worker_payment page',
                //'users' => $users

            ];

            $this->view('workers/worker_payment', $data);
          
        }

        public function worker_profile_edit() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'worker_profile_edit page',
                //'users' => $users

            ];

            $this->view('workers/worker_profile_edit', $data);
          
        }

        public function worker_schedule() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'worker_schedule page',
                //'users' => $users

            ];

            $this->view('workers/worker_schedule', $data);
          
        }

        public function worker_service() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'worker_service page',
                //'users' => $users

            ];

            $this->view('workers/worker_service', $data);
          
        }

        public function worker_view_profile() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'worker_view_profile page',
                //'users' => $users

            ];

            $this->view('workers/worker_view_profile', $data);
          
        }


}