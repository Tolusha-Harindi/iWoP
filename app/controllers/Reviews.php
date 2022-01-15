<?php
class Reviews extends Controller {
    public function __construct() {
        $this->reviewModel = $this->model('Review');
        
    }

    //this method will decide the operation to be perform should be a create or update 
    public function createOrUpdate(){
        echo 'Inside Create or Update';
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_REVIEW = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $rid = $_REVIEW['review_Id'];
            if(empty(trim($rid))){
                //perform the create opertaion
                $data = [
                    'name' => '',
                    'email' => '',
                    'reviewContent'=>''
                ];
        
                if($_SERVER['REQUEST_METHOD'] == 'POST') {
            
                    $data = [
                        'name' => trim($_REVIEW['firstname']),
                        'email' => trim($_REVIEW['email']),
                        'reviewContent'=>trim($_REVIEW['subject'])
                    ];
                }
        
                if ($this->reviewModel->addReview($data)) {
                    header("Location: " . URLROOT . "/companies/company_profilesforworkernew"); //may need to change
                } else {
                    die("Something went wrong, please try again!");
                }

            }else{
                //perform the update operation

                if($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $_REVIEW = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
                    $data = [
                        'reviewID'=>trim($_REVIEW['review_Id']),
                        'name' => trim($_REVIEW['firstname']),
                        'email' => trim($_REVIEW['email']),
                        'reviewContent'=>trim($_REVIEW['subject'])
                    ];
        
                    if ($this->reviewModel->updateReview($data)) {
                        header("Location: " . URLROOT . "/companies/company_profilesforworkernew");
                    } else {
                        die("Something went wrong, please try again!");
                    }
                }
            }
            
        }else{
            echo 'Something went wrong';
        }

    }//end of craeteOrUpdate Method

    //this will fill the review form with the current values before update
    public function fillReviewForm($id){
        //echo 'Inside Fill Review Mwthod';
        $reviews = $this->reviewModel->getReviews();
        $review = $this->reviewModel->findReviewById($id);
        //var_dump($review);

        $fillingData = (Object)[
            'reviewID'=>$review->reviewID,
            'name'=>$review->name,
            'email'=>$review->email,
            'reviewContent'=>$review->reviewContent
        ];

        $data = [
            'review'=>$reviews,
            'fillingData'=>$fillingData
        ];
        $this->view('companies/company_profilesforworkernew', $data);  
    }

    //method to delete a review
    public function delete($id) {

        //echo 'The delete post Id is -'.$id;


        // if(!isLoggedIn()) {
        //     header("Location: " . URLROOT . "/posts");
        // } elseif($post->user_id != $_SESSION['user_id']){
        //     header("Location: " . URLROOT . "/posts");
        // }


        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if($this->reviewModel->deleteReview($id)) {
                    header("Location: " . URLROOT . "/companies/company_profilesforworkernew");
            } else {
               die('Something went wrong!');
            }
        }
    }

}