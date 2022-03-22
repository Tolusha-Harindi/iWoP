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
             if(!isLoggedIn()){
                header("Location: " . URLROOT . "/workers");
            }
           
            $bankdata = $this->workerModel->getbank($_SESSION['worker_id']);

            $data = [
                'bankdata'=> $bankdata,
                'name'=>'',
                'bname'=>'',
                'branch'=>'',
                'code'=>'',
                'account'=>'',
                'nameError'=>'',
                'bnameError'=>'',
                'branchError'=>'',
                'codeError'=>'',
                'accountError'=>''
            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                
                $data = [
                    'worker_id'=> $_SESSION['worker_id'],
                    //'bankdata'=>$bankdata,
                    'name'=>trim($_POST['name']),
                    'bname'=>trim($_POST['bname']),
                    'branch'=>trim($_POST['branch']),
                    'code'=>trim($_POST['code']),
                    'account'=>trim($_POST['account']),
                    'nameError'=>'',
                    'bnameError'=>'',
                    'branchError'=>'',
                    'codeError'=>'',
                    'accountError'=>''
                ];

                if(empty($data['name'])){
                    $data['nameError'] = "The name of a Holder cannot be empty";
                }

                if(empty($data['bname'])){
                    $data['bnameError'] = "The name of a Bank cannot be empty";
                }

                if(empty($data['branch'])){
                    $data['branchError'] = "The branch name cannot be empty";
                }

                if(empty($data['code'])){
                    $data['codeError'] = "The code cannot be empty";
                }

                if(empty($data['account'])){
                    $data['accountError'] = "The account number cannot be empty";
                }

                if(empty($data['nameError']) && empty($data['bnameError']) && empty($data['branchError']) && empty($data['codeError']) && empty($data['accountError'])){
                    if($this->workerModel->editbank($data)){
                        header("Location: ". URLROOT . "/workers/worker_bank_edit"); //redirect to
                    }else{
                        echo "<script>alert('Something went wrong, Please try again!'); </script>";
                    }
                }else{
                    $this->view('workers/worker_bank_edit', $data);
                }
            }
            $this->view('workers/worker_bank_edit', $data);
          
        }


        public function worker_dashboard() {
            $data = [
                'title' => 'worker_dashboard page'
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

        public function worker_job_vaccancies() {

            //$users = $this->pageModel-> getUsers();
            $data = [
                'title' => 'worker_job_vaccancies page',
                //'users' => $users

            ];

            $this->view('workers/worker_job_vaccancies', $data);
          
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
            if(!isLoggedIn()){
                header("Location: " . URLROOT . "/workers");
            }

            $data = [
                'name' => '',
                'address' => '',
                'contact' => '',
                'startTime' => '',
                'endTime' => '',
                'date' => '',
                'nameError' => '',
                'addressError' => '',
                'contactError' => '',
                'startTimeError' => '',
                'endTimeError' => '',
                'dateError' => ''
            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //Sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                
                $data = [
                    'worker_id' => $_SESSION['worker_id'],
                    'name' => trim($_POST['name']),
                    'address' => trim($_POST['address']),
                    'contact' => trim($_POST['contact']),
                    'startTime' => trim($_POST['start']),
                    'endTime' => trim($_POST['end']),
                    'date' => trim($_POST['date']),
                    'nameError' => '',
                    'addressError' => '',
                    'contactError' => '',
                    'startTimeError' => '',
                    'endTimeError' => '',
                    'dateError' => ''
                ];
               
               //validate name on letters/numbers
               if(empty($data['name'])){
                $data['nameError'] = 'Please Enter Name';
               }

                //validate address on letters/numbers
                if(empty($data['address'])){
                    $data['addressError'] = 'Please Enter Address';
                   }

                //validate contact number on numbers
                if(empty($data['contact'])){
                    $data['contactError'] = 'Please Enter Contact';
                }

                //validation time
                if(empty($data['startTime'])){
                    $data['startTimeError'] = 'Please Enter Start Time';
                }

                //validation time
                if(empty($data['endTime'])){
                    $data['endTimeError'] = 'Please Enter End Time';
                }

                //validation date 
                if(empty($data['date'])){
                    $data['dateError'] = 'Please Enter Date.';
                }

                if(empty($data['nameError']) && empty($data['contactError']) && empty($data['addressError']) && empty($data['startTimeError']) && empty($data['endTimeError']) && empty($data['dateError'])){
                    if($this->workerModel->worker_schedule($data)){
                      echo "<script>alert('planned successfully!'); </script>";
                    
                        header('location: ' . URLROOT . '/workers/worker_schedule');
                    }
                    else{
                        echo "<script>alert('Something went wrong, Please try again!'); </script>";
                    }
                }
            }else{
                $this->view('workers/worker_schedule', $data);
            }            

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
