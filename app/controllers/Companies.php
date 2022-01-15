<?php
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
          
    }

    public function company_profileforworkers() {

        $this->view('companies/company_profileforworkers', $data);
          
    }

 

    public function companyverify() {

        $this->view('companies/companyverify', $data);
          
    }

}