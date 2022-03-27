<?php
    class Workers extends Controller {
        public function __construct() {
            $this->workerModel = $this->model('Worker');
        }

        public function worker_new_profile(){
            if(!isLoggedIn()){
                header("Location: " . URLROOT . "/workers");
            }
            $worker=$this->workerModel->getprofile($_SESSION['worker_id']);
            $data = [
                'worker'=> $worker,
                'profile' => '',
                'name'=>'',
                'email' => '',
                'adderss' => '',
                'district' => '',
                'city' => '',
                'frontside' => '',
                'backside' => '',
                'profileError' => '',
                'nameError'=>'',
                'emailError' => '',
                'addressError' => '',
                'districtError' => '',
                'cityError' => '',
                'frontsideError' => '',
                'backsideError' => ''
            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                
                $data = [
                    'worker_id'=>$_SESSION['worker_id'],
                    'profile' => trim($_POST['prof_pic']),
                    'name'=>trim($_POST['name']),
                    'email' => trim($_POST['email']),
                    'address' => trim($_POST['address']),
                    'district' => trim($_POST['district']),
                    'city' => trim($_POST['city']),
                    'frontside' => trim($_POST['front']),
                    'backside' => trim($_POST['back']),
                    'profileError' => '',
                    'nameError'=>'',
                    'emailError' => '',
                    'addressError' => '',
                    'districtError' => '',
                    'cityError' => '',
                    'frontsideError' => '',
                    'backsideError' => ''
                ];

                $nameValidation = "/^[a-zA-Z0-9]*$/";
                //$imgAllowed = array('jpeg','jpg', "png", "JPEG","JPG", "PNG"); //allow only these file of extensions
                //$ext= pathinfo(check_input($data['profile']), PATHINFO_EXTENSION);
                $textValidation = "/^[a-zA-z]*$/";

                //Validation for profile image upload
                if(empty($data['profile'])){
                    $data['profileError'] = 'Please upload your image.';
                }
                // else if(!in_array($ext,$imgAllowed)){
                //     $data['profileError'] = 'JPEG only.';
                // }

                 //validate district name on letters
                 if(empty($data['district'])){
                    $data['districtError'] = 'Please Enter District';
                }

                //validate city name on letters/numbers
                if(empty($data['city'])){
                    $data['cityError'] = 'Please Enter City';
                }

                if(empty($data['email'])){
                    $data['emailError'] = 'Please Enter Email';
                }

                if(empty($data['name'])){
                    $data['nameError'] = 'Please Enter Name';
                }

                if(empty($data['profileError']) && empty($data['nameError']) && empty($data['addressError']) && empty($data['districtError']) && empty($data['cityError']) && empty($data['emailError']) && empty($data['frontsideError'])&& empty($data['backsideError'])){
                    echo "omg";
                    if($this->workerModel->worker_profile($data)){
                        echo "success";
                        header('location: ' . URLROOT . '/workers/worker_service');
                    }
                    else{
                        echo "wrong email!";
                    }
                    $this->view('workers/worker_new_profile', $data);
                }
            }

            $this->view('workers/worker_new_profile', $data);
        }

        
        public function worker_service(){
            $category=$this->workerModel->allCategories();
            $data = [
                'allcat'=>$category,
                'category1' => '',
                'category2' =>'',
                'category3' =>'',
                'category4' =>'',
                'category5' =>'',
                'work_district'=>'',
                'work_city'=>'',
                'qualification'=>'',
                'gs_certi'=>'',
                'exp_year'=>'',
                'work_hour'=>'',
                'call_time'=>'',
                'work_day'=>'',
                'past_exp'=>'',
                'category1Error' =>'',
                'work_districtError'=>'',
                'work_cityError'=>'',
                'qualificationError'=>'',
                'gs_certiError'=>'',
                'exp_yearError'=>'',
                'work_hourError'=>'',
                'call_timeError'=>'',
                'work_dayError'=>'',
                'past_expError'=>''
            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //Sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'allcat'=>$category,
                    'worker_id'=> $_SESSION['worker_id'],
                    'category1' => trim($_POST['category1']),
                    'category2' => trim($_POST['category2']),
                    'category3' => trim($_POST['category3']),
                    'category4' => trim($_POST['category4']),
                    'category5' => trim($_POST['category5']),
                    'work_district'=> trim($_POST['wo-district']),
                    'work_city'=> trim($_POST['wo-city']),
                    'qualification'=> trim($_POST['qualification']),
                    'gs_certi'=> trim($_POST['gs']),
                    'exp_year'=> trim($_POST['experience']),
                    'work_hour'=> trim($_POST['hour']),
                    'call_time'=> trim($_POST['call']),
                    'work_day'=> trim($_POST['wo-days']),
                    'past_exp'=> trim($_POST['past']),
                    'category1Error' =>'',
                    'work_districtError'=>'',
                    'work_cityError'=>'',
                    'qualificationError'=>'',
                    'gs_certiError'=>'',
                    'exp_yearError'=>'',
                    'work_hourError'=>'',
                    'call_timeError'=>'',
                    'work_dayError'=>'',
                    'past_expError'=>''
                ];

                if(empty($data['category1'])){
                    $data['category1Error'] = 'Please Select one Category';
                }

                if(empty($data['work_district'])){
                    $data['work_districtError'] = 'Please Enter the district';
                }

                if(empty($data['work_city'])){
                    $data['work_cityError'] = 'Please Enter the city';
                }

                if(empty($data['qualification'])){
                    $data['qualificationError'] = 'Please upload the qualification';
                }

                if(empty($data['gs_certi'])){
                    $data['gs_certiError'] = 'Please upload the gs certificate';
                }

                if(empty($data['exp_year'])){
                    $data['exp_yearError'] = 'Please Enter the experience year';
                }

                if(empty($data['work_hour'])){
                    $data['work_hourError'] = 'Please Enter the working hour';
                }

                if(empty($data['call_time'])){
                    $data['call_timeError'] = 'Please Enter the best call time';
                }

                if(empty($data['work_day'])){
                    $data['work_dayError'] = 'Please Enter the working day';
                }

                if(empty($data['past_exp'])){
                    $data['past_expError'] = 'Please Enter the past experience';
                }

                if(empty($data['category1Error']) && empty($data['work_districtError']) && empty($data['work_cityError']) && empty($data['qualificationError']) && empty($data['gs_certiError']) && empty($data['exp_yearError']) && empty($data['call_timeError']) && empty($data['work_hourError']) && empty($data['work_dayError']) && empty($data['past_expError'])){
                    if($this->workerModel->insertService($data)){
                        header('location: ' . URLROOT . '/workers/worker_bank_detail');   
                    }
                    else{
                        die('Something went wrong');
                    }
                }
            }

            $this->view('workers/worker_service', $data);
        }

        public function worker_bank_detail(){
            $data = [
                'name' => '',
                'b-name' =>'',
                'branch' =>'',
                'code' =>'',
                'account' =>'',
                'nameError' =>'',
                'b-nameError' => '',
                'branchError' =>'',
                'codeError' =>'',
                'accountError' =>''
            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //Sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'worker_id'=>$_SESSION['worker_id'],
                    'name' => trim($_POST['name']),
                    'b-name' =>trim($_POST['b-name']),
                    'branch' =>trim($_POST['branch']),
                    'code' =>trim($_POST['code']),
                    'account' =>trim($_POST['account']),
                    'nameError' =>'',
                    'b-nameError' => '',
                    'branchError' =>'',
                    'codeError' =>'',
                    'accountError' =>''
                ];

                if(empty($data['name'])){
                    $data['nameError'] = 'Please Enter name';
                }

                if(empty($data['b-name'])){
                    $data['b-nameError'] = 'Please Enter Branch name';
                }

                if(empty($data['branch'])){
                    $data['branchError'] = 'Please Enter branch';
                }

                if(empty($data['code'])){
                    $data['codeError'] = 'Please Enter Code';
                }
  
                if(empty($data['account'])){
                    $data['accountError'] = 'Please Enter Account';
                }

                 if(empty($data['nameError']) && empty($data['b-nameError']) && empty($data['branchError']) && empty($data['codeError']) && empty($data['accountError'])){
                    if($this->workerModel->insertBank($data)){
                        header('location: ' . URLROOT . '/logins/worker_login');   
                    }
                    else{
                        die('Something went wrong');
                    }
                    //$this->view('workers/worker_bank_detail', $data);
                }
           }
        $this->view('workers/worker_bank_detail', $data);
      
        }   


        public function worker_all_ads() {
            if(!isLoggedIn()){
                header("Location: " . URLROOT . "/workers");
            }

            $category=$this->workerModel->allCategories();
            $ads = $this->workerModel->allCusAds();

            $data = [
                'allcat'=>$category,
                'ads'=> $ads
            ];

            $this->view('workers/worker_all_ads', $data);
        }

        public function apply_ads($id){
            if(!isLoggedIn()){
                header("Location: " . URLROOT . "/workers");
            }

            $worker = $this->workerModel->getprofile($_SESSION['worker_id']);
            $data = [
                'worker'=> $worker->worker_id,
                'id'=>$id,
                'name' => $worker->fname
            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                if($this->workerModel->applyAd($data)){
                    header("Location: " . URLROOT . "/workers/worker_all_ads");   
                }else {
                    die('Something went wrong');
                }

            }
            $this->view('workers/worker_all_ads');
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
            $invites=$this->workerModel->CountInviteJobs();
            $invites_com=$this->workerModel->CountInviteCompanyJobs();
            $pending=$this->workerModel->pendingWorkCount();
            $complete=$this->workerModel->completedWorks();
            $applyJob=$this->workerModel->appliedJobCount();
            $applyAds=$this->workerModel->appliedAdsCount();
            $works=$this->workerModel->totalWorks();
            $acceptAds=$this->workerModel->acceptads();
            $rejectAds=$this->workerModel->rejectads();
            $acceptJobs=$this->workerModel->acceptjobs();
            $rejectJobs=$this->workerModel->rejectjobs();
            $category=$this->workerModel->topCategory();
            $worker=$this->workerModel->topWorker();
            $company=$this->workerModel->topCompany();

            $total_invites=$invites+$invites_com;

            $data = [
                'invites' => $total_invites,
                'pending' => $pending,
                'complete'=> $complete,
                'applyJob'=> $applyJob,
                'applyAds'=> $applyAds,
                'works'=> $works,
                'acceptads'=> $acceptAds,
                'rejectads'=> $rejectAds,
                'acceptjobs'=> $acceptJobs,
                'rejectjobs'=> $rejectJobs,
                'category'=> $category,
                'worker'=> $worker,
                'company' => $company
            ];

            $this->view('workers/worker_dashboard', $data);
          
        }

        public function worker_job_invite() {
            if(!isLoggedIn()){
                header("Location: " . URLROOT . "/workers");
            }
             
            $jobs=$this->workerModel->inviteCusJob();
            $com=$this->workerModel->inviteComJob();
            //$jobdata=$this->workerModel->findJobById($id);

            $data = [
               'jobs'=> $jobs,
               'com'=>$com,
            ];

            $this->view('workers/worker_job_invite', $data);
          
        }

        public function show_job_detail($id){
            if(!isLoggedIn()){
                header("Location: " . URLROOT . "/workers");
            }

            $jobdata=$this->workerModel->findJobById($id);
            $data = [
                'job'=> $jobdata,
             ];
            
            $this->view('workers/worker_show_customer_invite',$data);
        }

        public function show_job_Com_detail($id){
            if(!isLoggedIn()){
                header("Location: " . URLROOT . "/workers");
            }
            $jobdata=$this->workerModel->findComJobById($id);
            $data = [
                'job'=> $jobdata,
             ];
            
            $this->view('workers/worker_show_company_invite',$data);
        }

        public function accept_job($id){
            if(!isLoggedIn()){
                header("Location: " . URLROOT . "/workers");
            }
                if($this->workerModel->acceptJob($id)){
                    header("Location: " . URLROOT . "/workers/worker_job_invite");   
                }else {
                    die('Something went wrong');
                }
        }

        public function reject_job($id){
            if(!isLoggedIn()){
                header("Location: " . URLROOT . "/workers");
            }
            if($this->workerModel->rejectJob($id)){
                    header("Location: " . URLROOT . "/workers/worker_job_invite");    
            }else {
                die('Something went wrong');
            }
        }

        public function accept_Com_job($id){
            if(!isLoggedIn()){
                header("Location: " . URLROOT . "/workers");
            }
                if($this->workerModel->acceptComJob($id)){
                    header("Location: " . URLROOT . "/workers/worker_job_invite");   
                }else {
                    die('Something went wrong');
                }
        }

        public function reject_Com_job($id){
            if(!isLoggedIn()){
                header("Location: " . URLROOT . "/workers");
            }
            if($this->workerModel->rejectComJob($id)){
                    header("Location: " . URLROOT . "/workers/worker_job_invite");    
            }else {
                die('Something went wrong');
            }
        }


        public function worker_job_vaccancies() {
            if(!isLoggedIn()){
                header("Location: " . URLROOT . "/workers");
            }

            $category=$this->workerModel->allCategories();
            $jobs = $this->workerModel->allComJobs();

            $data = [
                'allcat'=>$category,
                'jobs'=> $jobs
            ];

            $this->view('workers/worker_job_vaccancies', $data);
        }

        public function apply_jobs($id){
            if(!isLoggedIn()){
                header("Location: " . URLROOT . "/workers");
            }

            echo "not work";
            $worker = $this->workerModel->getprofile($_SESSION['worker_id']);

            $data = [
                'worker'=> $worker->worker_id,
                'id'=>$id,
                'name' => $worker->fname
            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                if($this->workerModel->apply_Company_Jobs($data)){
                    header("Location: " . URLROOT . "/workers/worker_job_vaccancies");
                    
                }else {
                    die('Something went wrong');
                }

            }
            $this->view('workers/worker_job_vaccancies');

        }

        public function worker_payment(){
            
            if(!isLoggedIn()){
                header("Location: " . URLROOT . "/workers");
            }
             
            $rows=$this->workerModel->receivePayment();
            $gets=$this->workerModel->getPayment();

            $data = [
               'rows' => $rows,
               'gets'=> $gets,
            ];

            $this->view('workers/worker_payment', $data);
        }

        public function worker_profile_edit() {
                if(!isLoggedIn()){
                    header("Location: " . URLROOT . "/workers");
                }
               
                $profile = $this->workerModel->fetchprofile(); /*profileEdit() function created inside the worker file*/

                $category=$this->workerModel->allCategories();
                $service = $this->workerModel->getservice(); 
                //pass to view
                $data = [
                    'service'=>$service,
                    'allcat'=>$category,
                    'profile' => $profile,     //$profiledata variable that we have
                    'profilepic' => '',
                    'fname' => '',
                    'lname'=>'',
                    'email' => '',
                    'contact' => '',
                    'address' => '',
                    'profilepicError' => '',
                    'fnameError' => '',
                    'lnameError'=>'',
                    'emailError' => '',
                    'contactError' => '',
                    'addressError' => '',
                    'category1' => '',
                    'category2' => '',
                    'category3' => '',
                    'category4' => '',
                    'category5' => '',
                'work-district' => '',
                'work-city' => '',
                'qualification' => '',
                'experience' => '',
                'work-hour' => '',
                'best-time' => '',
                'work-day' => '',
                'past-experience' => '',
                'category1Error' => '',
                'work-districtError' => '',
                'work-cityError' => '',
                'qualificationError' => '',
                'experienceError' => '',
                'work-hourError' => '',
                'best-timeError' => '',
                'work-dayError' => '',
                'past-experienceError' => ''
                ];

                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    //die("It works");
                    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                    $data = [
                        'profile' => $profile,
                        'service'=>$service,
                        'allcat'=>$category,
                        'worker_id' => $_SESSION['worker_id'],
                        'profilepic' => trim($_POST['prof_pic']) ,
                        'fname' => trim($_POST['fname']) ,
                        'lname' => trim($_POST['lname']) ,
                        'email' => trim($_POST['email']),
                        'contact' => trim($_POST['contact']) ,
                        'address' => trim($_POST['address']) ,
                        'profilepicError' => '',
                        'fnameError' => '',
                        'lnameError'=>'',
                        'emailError' => '',
                        'contactError' => '',
                        'addressError' => '',
                    'category1' => trim($_POST['cat1']) ,
                    'category2' => trim($_POST['cat2']) ,
                    'category3' => trim($_POST['cat3']) ,
                    'category4' => trim($_POST['cat4']) ,
                    'category5' => trim($_POST['cat5']) ,
                    'work-district' => trim($_POST['wo-district']) ,
                    'work-city' => trim($_POST['wo-city']) ,
                    'qualification' => trim($_POST['qualification']) ,
                    'experience' => trim($_POST['experience']) ,
                    'work-hour' => trim($_POST['hour']) ,
                    'best-time' => trim($_POST['call']) ,
                    'work-day' => trim($_POST['wo-days']) ,
                    'past-experience' => trim($_POST['past']), 
                    'category1Error' => '',
                    'work-districtError' => '',
                    'work-cityError' => '',
                    'qualificationError' => '',
                    'experienceError' => '',
                    'work-hourError' => '',
                    'best-timeError' => '',
                    'work-dayError' => '',
                    'past-experienceError' => ''
                    ];

                    if(empty($data['profilepic'])){
                        $data['profilepicError'] = "The profile pic of a Profile cannot be empty";
                    }

                    if(empty($data['fname'])){
                        $data['fnameError'] = "The first name of a Profile cannot be empty";
                    }

                    if(empty($data['lname'])){
                        $data['lnameError'] = "The last name of a Profile cannot be empty";
                    }

                    if(empty($data['email'])){
                        $data['emailError'] = "The email of a Profile cannot be empty";
                    }

                    if(empty($data['contact'])){
                        $data['contactError'] = "The category of a Profile cannot be empty";
                    }

                    if(empty($data['address'])){
                        $data['addressError'] = "The category of a Profile cannot be empty";
                    }

                    if(empty($data['category1'])){
                        $data['category1Error'] = "The category cannot be empty";
                    }
    
                    if(empty($data['work-district'])){
                        $data['work-districtError'] = "The District cannot be empty";
                    }
    
                    if(empty($data['work-city'])){
                        $data['work-cityError'] = "The city cannot be empty";
                    }
    
                    if(empty($data['qualification'])){
                        $data['qualificationError'] = "The qualification cannot be empty";
                    }
    
                    if(empty($data['experience'])){
                        $data['experienceError'] = "The Experience cannot be empty";
                    }
    
                    if(empty($data['work-hour'])){
                        $data['work-hourError'] = "The Work hour cannot be empty";
                    }
    
                    if(empty($data['best-time'])){
                        $data['best-timeError'] = "The best time to call cannot be empty";
                    }
    
                    if(empty($data['work-day'])){
                        $data['work-dayError'] = "The work day cannot be empty";
                    }
    
                    if(empty($data['past-experience'])){
                        $data['past-experienceError'] = "The Past Experience cannot be empty";
                    }
    

                    /*error messages are empty*/
                    if(empty($data['fnameError']) && empty($data['lnameError']) && empty($data['profilepicError']) && empty($data['emailError']) && empty($data['contactError']) && 
                      empty($data['addressError']) && empty($data['category1Error']) && empty($data['work-districtError']) && empty($data['work-cityError']) && empty($data['qualificationError']) && empty($data['experienceError']) && 
                      empty($data['work-hourError']) && empty($data['best-timeError']) && empty($data['work-dayError']) && empty($data['past-experienceError'])){
                        if($this->workerModel->edit_profile($data)){
                            header("Location: ". URLROOT . "/workers/worker_profile_edit"); //redirect to
                            echo "<script>alert('Succefully Updated!!'); </script>";
                        }else{
                            echo "<script>alert('Something went wrong, Please try again!'); </script>";
                        }
                    }
                }
            
            $this->view('workers/worker_profile_edit', $data);
        }

        public function delete_profile(){
            if(!isLoggedIn()){
                header("Location: " . URLROOT . "/workers");
            }
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                //echo "0987654v";
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                if($this->workerModel->delete_profile()){
                    header("Location: " . URLROOT . "/logins/worker_login");    
                }else {
                   die('Something went wrong');
                }
        }
        $this->view('workers/worker_profile_edit');
        }

        public function password_edit(){
            $data = [
                'wpassword' =>'',
                'new-password' =>'',
                'confirm-password' =>'',
                'wpasswordError' =>'',
                'new-passwordError' =>'',
                'confirm-passwordError' =>'',
            ];
    
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
                $data = [
                    'wpassword' => $_POST['wpassword'],
                    'new-password' => $_POST['new-password'],
                    'confirm-password' => $_POST['confirm-password'],
                    'wpasswordError' =>'',
                    'new-passwordError' =>'',
                    'confirm-passwordError' =>'',
                ];
    
                $passwordValidation = "/^(.{0,7}|[^a-z]|[^\d])$/i";
    
                // Validate password on length, numeric values,
                if(empty($data['new-password'])){
                    $data['new-passwordError'] = 'Please enter password.';
                } else if(strlen($data['new-password']) < 6){
                    $data['new-passwordError'] = 'Password must be at least 8 characters';
                } else if (preg_match($passwordValidation, $data['new-password'])) {
                    $data['new-passwordError'] = 'Password must be have at least one numeric value.';
                }

                //Validate confirm password
                if (empty($data['confirm-password'])) {
                    $data['confirm-passwordError'] = 'Please enter confirm password.';
                } else {
                    if ($data['new-password'] != $data['confirm-password']) {
                    $data['confirm-passwordError'] = 'Passwords do not match, please try again.';
                    }
                }

    
                if(empty($data['confirm-passwordError'])){
                    $worker = $this->workerModel->findWorkerPassword();
    
                    $Passworddata = [
                        'worker' => $worker
                    ];
    
                    if (password_verify($data['wpassword'],  $Passworddata['worker'][0]->password )){

                        //Hash Password
                        $data['new-password'] = password_hash($data['new-password'], PASSWORD_DEFAULT);

                        if ($this->workerModel->changePassword($data)) {
                            //Redirect to the login page
                            header('location: ' . URLROOT . '/workers/worker_change_password');
                        } else {
                            die('Something went wrong.');
                        }  
                } else{
                    $data['wpasswordError'] = 'Passwords do not match, please try again.';
                }
            $this-> view('workers/worker_change_password', $data);
                }
        
            }     
        $this->view('workers/worker_change_password', $data);
        }

        public function worker_schedule() {
            if(!isLoggedIn()){
                header("Location: " . URLROOT . "/workers");
            }

            $work = $this->workerModel->pendingWork();

            $data = [
                'work'=>$work,
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

}
