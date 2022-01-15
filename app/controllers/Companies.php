<?php
<<<<<<< HEAD
    class Companies extends Controller {
        public function __construct() {
            $this->companyModel = $this->model('Company');
        }

        public function company_ads() {

            if(!isLoggedIn()){
                header("Location: " . URLROOT . "/companies");
            }

            $posts = $this->companyModel->findAllPosts();

            $data = [
                'posts' => $posts,
                'category' => '',
                'title' => '',
                'description' => '',
                'address' => '',
                'contact' => '',
                'start_date' => '',
                'end_date' => '',
                'budget' => '',
                'work' => '',
                'categoryError' => '',
                'titleError' => '',
                'descriptionError' => '',
                'addressError' => '',
                'contactError' => '',
                'start_dateError' => '',
                'end_dateError' => '',
                'budgetError' => '',
                'workError' => '',

            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
 
                $data = [
                 'reg_no' => $_SESSION['reg_no'],
                 'category' => trim($_POST['category']),
                 'title' => trim($_POST['title']),
                 'description' => trim($_POST['description']),
                 'address' => trim($_POST['address']),
                 'contact' => trim($_POST['contact']),
                 'start_date' => trim($_POST['start_date']),
                 'end_date' => trim($_POST['end_date']),
                 'budget' => trim($_POST['budget']),
                 'work' => trim($_POST['work']),
                 'categoryError' => '',
                 'titleError' => '',
                 'descriptionError' => '',
                 'addressError' => '',
                 'contactError' => '',
                 'start_dateError' => '',
                 'end_dateError' => '',
                 'budgetError' => '',
                 'workError' => '',
 
             ];
 
             if(empty($data['category'])){
                 $data['categoryError'] = "The category of a Post cannot be empty";
             }
 
             if(empty($data['title'])){
                 $data['titleError'] = "The Title of a Post cannot be empty";
             }
 
             if(empty($data['description'])){
                 $data['descriptionError'] = "The description of a Post cannot be empty";
             }
 
             if(empty($data['address'])){
                 $data['addressError'] = "The address of a Post cannot be empty";
             }
 
             if(empty($data['contact'])){
                 $data['contactError'] = "The contact of a Post cannot be empty";
             }
 
             if(empty($data['start_date'])){
                 $data['start_dateError'] = "The start date of a Post cannot be empty";
             }
 
             if(empty($data['end_date'])){
                 $data['end_dateError'] = "The end date of a Post cannot be empty";
             }
 
             if(empty($data['budget'])){
                 $data['budgetError'] = "The budget of a Post cannot be empty";
             }
 
             if(empty($data['work'])){
                 $data['workError'] = "The work of a Post cannot be empty";
             }
 
             /*check error messages are empty*/
             if(empty($data['categoryError']) && empty($data['titleError']) && empty($data['descriptionError']) && empty($data['addressError']) && empty($data['contactError']) && empty($data['start_dateError']) && empty($data['end_dateError']) && empty($data['budgetError']) && empty($data['workError'])){
                 if($this->companyModel->addPost($data)){
                     header("Location: ". URLROOT . "/companies/company_ads"); //redirect to
                 }else{
                     echo "<script>alert('Something went wrong, Please try again!'); </script>";
                 }
             }else{
                 $this->view('companies/company_ads', $data);
             }
         }         

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
=======
class Companies extends Controller {
    public function __construct() {
        $this->reviewModel = $this->model('Review');
        // $this->companyAddModel = $this->model('CompanyAdd');
    }

    //load the main page related to company
    public function index(){
       
    }

    public function company_profilesforworkernew() {
        $reviews = $this->reviewModel->getReviews();
        echo 'Type of the reviews - '.getType($reviews);
        $fillingData = (Object)[
            'reviewID'=>'',
            'name'=>'',
            'email'=>'',
            'reviewContent'=>''
        ];

        $newReviews = array();
        //adding timeAgo and dateAgo
        foreach($reviews as $row){
            date_default_timezone_set('Asia/Kolkata');
            $c_date =  new DateTime("now"); //get current datetime
            $posted_date = new DateTime($row->date);
            $stringDate = $c_date->format('Y-m-d H:i:s');
            
            $interval = $c_date->diff($posted_date);
            $minsAgo = $interval->i;
            $hoursAgo = $interval->h;
            $daysAgo = $interval->days;

            $foo = (array)$row;
            $foo['daysAgo'] = $daysAgo;
            $foo['minsAgo'] = $minsAgo;
            $foo['hoursAgo'] = $hoursAgo;
            $row = (object)$foo;

            array_push($newReviews , $row);
        
        };

     
        $data = [
            'review'=>$newReviews,
            'fillingData'=>$fillingData
        ];

        $this->view('companies/company_profilesforworkernew', $data);      
    }

    
     public function company_ads() {

    
       
        $this->view('companies/company_ads', $data); 
     }


    //-----------------------------------------------------------------------------------------
    public function company_category() {
        $this->view('companies/company_category', $data);      
    }

    public function company_dashboard() {

        $this->view('companies/company_dashboard', $data);

    }

    public function company_inviteforjob() {
        $this->view('companies/company_inviteforjob', $data);          
    }

    public function company_profile() {
        $this->view('companies/company_profile', $data);
>>>>>>> main
          
    }

    public function company_profileforworkers() {

        $this->view('companies/company_profileforworkers', $data);
          
    }

 

    public function companyverify() {

        $this->view('companies/companyverify', $data);
          
    }

}