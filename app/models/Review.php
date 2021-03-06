<?php
    class Review {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        // Test (database and table needs to exist before this works)
        public function getReviews() {
            $this->db->query("SELECT * FROM company_review");

            $result = $this->db->resultSet(); 
        
            return $result;
        }

    

        //method to add the review to the database
        public function addReview($data) {
            $this->db->query('INSERT INTO company_review (companyID, workerID , name, email, reviewContent) VALUES (:companyID, :workerID, :name ,:email,:reviewContent )');
    
            $this->db->bind(':companyID', 000); //dummy value
            $this->db->bind(':workerID', 000); //dummy value
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':reviewContent', $data['reviewContent']);
    
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        } 
        
        //method to get the selected review details from the database
        public function findReviewById($id) {
            echo 'The Recieved ID is -'.$id;
            $this->db->query('SELECT * FROM company_review WHERE reviewID = :reviewID');
            
            $this->db->bind(':reviewID', $id);
    
            $row = $this->db->single();
            //echo 'inside the method '.$row->name;
            return $row;
        }



        //method to update a review in the database
        public function updateReview($data) {
            $this->db->query('UPDATE company_review SET name = :name, email = :email , reviewContent = :reviewContent WHERE reviewID = :reviewID');
    
            $this->db->bind(':reviewID', $data['reviewID']);
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':reviewContent', $data['reviewContent']);
            
    
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }


        //method to delete a review 
        public function deleteReview($id) {
            $this->db->query('DELETE FROM company_review WHERE reviewID = :reviewID');

            $this->db->bind(':reviewID', $id);

            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    
    }