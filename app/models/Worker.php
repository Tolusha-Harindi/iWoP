<?php
   class Worker{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }

    public function getprofile($wid){
        $this->db->query('SELECT * FROM worker WHERE worker_id = :worker_id');

        $this->db->bind(':worker_id', $wid);
        $row = $this->db->single();

        return $row;
    }

    public function fetchprofile(){
        $this->db->query("SELECT w.worker_id, w.fname, w.lname, p.prof_pic, w.email, p.address, w.contact FROM worker AS w JOIN worker_personal_detail AS p ON p.worker_id=w.worker_id WHERE w.worker_id = '{$_SESSION['worker_id']}'");

        $row = $this->db->single();

        return $row;
    }


    public function worker_profile($data){
        $this->db->query("INSERT INTO worker_personal_detail(worker_id, address, district, city, nic_front, nic_back, prof_pic) 
                          VALUES (:worker_id, :address, :district, :city, :frontside, :backside, :profile) ");

        //Bind values
        $this->db->bind(':worker_id', $data['worker_id']);
        $this->db->bind(':profile', $data['profile']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':district', $data['district']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':frontside', $data['frontside']);
        $this->db->bind(':backside', $data['backside']);

        if($this->db->execute()){
            return true;
        }else {
            return false;
        }
    
     }

    public function getservice(){
        $this->db->query("SELECT * FROM service WHERE worker_id = '{$_SESSION['worker_id']}'");

        $row = $this->db->single();

        return $row;
    }

    public function allCategories(){
        $this->db->query('SELECT * FROM category');

        $row = $this->db->resultSet();

        return $row;
    }

    public function insertService($data){
        $this->db->query('INSERT INTO service (worker_id, category1, category2, category3, category4, category5, working_district, working_city, working_days, gs_certi, qualification, exp_year, work_hour, call_time, experience) 
                          VALUES (:worker_id, :category1, :category2, :category3, :category4, :category5, :work_district, :work_city, :work_day, :gs, :qualification, :exp_year, :work_hour, :call_time, :past)');

        //Bind values
        $this->db->bind(':worker_id', $data['worker_id']);
        $this->db->bind(':category1', $data['category1']);
        $this->db->bind(':category2', $data['category2']);
        $this->db->bind(':category3', $data['category3']);
        $this->db->bind(':category4', $data['category4']);
        $this->db->bind(':category5', $data['category5']);
        $this->db->bind(':work_district', $data['work_district']);
        $this->db->bind(':work_city', $data['work_city']);
        $this->db->bind(':work_day', $data['work_day']);
        $this->db->bind(':gs', $data['gs_certi']);
        $this->db->bind(':qualification', $data['qualification']);
        $this->db->bind(':exp_year', $data['exp_year']);
        $this->db->bind(':work_hour', $data['work_hour']);
        $this->db->bind(':call_time', $data['call_time']);
        $this->db->bind(':past', $data['past_exp']);

        //Execute the function
        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    public function findWorkerPassword(){
        $this->db->query("SELECT password FROM worker Where worker_id = '{$_SESSION['worker_id']}'");

        $results = $this->db->resultSet();
        
        return $results;
    }


    public function changePassword($data){
        $this->db->query("UPDATE worker SET password = :newpassword WHERE worker_id = '{$_SESSION['worker_id']}'");

        $this->db->bind(':newpassword', $data['new-password']);
     
        if($this->db->execute()){
            return true;
        }else {
            return false;
        }
    
    }

    public function insertBank($data){
        $this->db->query('INSERT INTO bank (worker_id, holder, bank_name, branch, code, account_no) VALUE (:worker_id, :name, :b-name, :branch, :code, :account)');

        $this->db->bind(':worker_id', $data['worker_id']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':b-name', $data['b-name']);
        $this->db->bind(':branch', $data['branch']);
        $this->db->bind(':code', $data['code']);
        $this->db->bind(':account', $data['account']);

        //Execute the function
        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    public function edit_profile($data){
        $this->db->query('UPDATE worker, worker_personal_detail, service 
                         SET worker_personal_detail.prof_pic=:profilepic, worker.fname=:fname, worker.lname=:lname, worker.email=:email, worker.contact=:contact, 
                         worker_personal_detail.address=:address, service.category1=:category1, service.category2=:category2, service.category3=:category3, service.category4=:category4, 
                         service.category5=:category5, service.working_district=:wo-district, service.working_city=:wo-city, service.qualification=:quali, service.exp_year=:expe,
                         service.work_hour=:hour, service.call_time=:time, service.working_days=:days, service.experience=:past,
                         WHERE worker.worker_id = :worker_id AND worker_personal_detail.worker_id=:worker_id AND service.worker_id=:worker_id');

        //Bind values
        $this->db->bind(':worker_id', $data['worker_id']);
        $this->db->bind(':profilepic', $data['profilepic']);
        $this->db->bind(':fname', $data['fname']);
        $this->db->bind(':lname', $data['lname']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':contact', $data['contact']);
        $this->db->bind(':category1', $data['category1']);
        $this->db->bind(':category2', $data['category2']);
        $this->db->bind(':category3', $data['category3']);
        $this->db->bind(':category4', $data['category4']);
        $this->db->bind(':category5', $data['category5']);
        $this->db->bind(':wo-district', $data['work-district']);
        $this->db->bind(':wo-city', $data['work-city']);
        $this->db->bind(':quali', $data['qualification']);
        $this->db->bind(':expe', $data['experience']);
        $this->db->bind(':hour', $data['work-hour']);
        $this->db->bind(':time', $data['best-time']);
        $this->db->bind(':days', $data['work-day']);
        $this->db->bind(':past', $data['past-experience']);

         //Execute the function
         if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    public function delete_profile(){
        $this->db->query("DELETE FROM worker WHERE worker_id = '{$_SESSION['worker_id']}'");

        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    public function getbank($wid){
        $this->db->query('SELECT * FROM bank WHERE worker_id = :worker_id');

        $this->db->bind(':worker_id', $wid);
        $row = $this->db->single();

        return $row;
    }

    public function editbank($data){
        $this->db->query('UPDATE bank SET holder=:name, bank_name=:bname, branch=:branch, code=:code, account_no=:account WHERE worker_id = :worker_id');

        $this->db->bind(':worker_id', $data['worker_id']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':bname', $data['bname']);
        $this->db->bind(':branch', $data['branch']);
        $this->db->bind(':code', $data['code']);
        $this->db->bind(':account', $data['account']);

        //Execute the function
        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    public function worker_schedule($data){
        $this->db->query('INSERT INTO schedule (worker_id, cus_name, address, contact_no, date, start_time, end_time) VALUES (:worker_id, :name, :address, :contact, :date, :startTime, :endTime)');

        //Bind values
        $this->db->bind(':worker_id', $data['worker_id']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':contact', $data['contact']);
        $this->db->bind(':startTime', $data['startTime']);
        $this->db->bind(':endTime', $data['endTime']);
        $this->db->bind(':date', $data['date']);

        //Execute the function
        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    public function find_schedule($id){
        $this->db->query('SELECT * FROM schedule WHERE schedule_id=:schedule_id');

        $this->db->bind(':schedule_id', $id);
        $row = $this->db->single();

        return $row;
    }

    public function set_finish($data){
        $this->db->query('UPDATE schedule SET status="FINISH" WHERE schedule_id=:schedule_id');

        $this->db->bind(':schedule_id', $data['schedule_id']);
        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    public function allCusAds(){
        $this->db->query('SELECT a.ads_id, c.fname, a.category, a.post_date, a.address, a.contact, a.title, a.description, a.start_date, a.end_date, a.budget, a.work
                          FROM customer_ads AS a 
                          INNER JOIN customer AS c
                          ON a.cus_id = c.cus_id
                          ORDER BY post_date DESC');
       
        $results = $this->db->resultSet(); //results inside array

        return $results;
    }

    public function findAdByDis($dis){
        $this->db->query('SELECT c.fname, a.category, a.post_date, a.address, a.contact, a.title, a.description, a.start_date, a.end_date, a.budget, a.work
                          FROM customer_ads AS a INNER JOIN customer AS c
                          ON a.cus_id = c.cus_id WHERE a.address LIKE '%'.:dis');

        $this->db->bind(':dis', $dis);
        $row = $this->db->resultSet();

        return $row;
    }

    public function findAdByCity($city){
        $this->db->query('SELECT c.fname, a.category, a.post_date, a.address, a.contact, a.title, a.description, a.start_date, a.end_date, a.budget, a.work
                          FROM customer_ads AS a INNER JOIN customer AS c
                          ON a.cus_id = c.cus_id WHERE address LIKE '%'. :city');

        $this->db->bind(':city', $city);
        $row = $this->db->resultSet();

        return $row;
    }

    public function findAdByCat($cat){
        $this->db->query('SELECT c.fname, a.category, a.post_date, a.address, a.contact, a.title, a.description, a.start_date, a.end_date, a.budget, a.work
                          FROM customer_ads AS a INNER JOIN customer AS c
                          ON a.cus_id = c.cus_id WHERE a.category=:cat');

        $this->db->bind(':cat', $cat);
        $row = $this->db->resultSet();

        return $row;
    }

    public function applyAd($data){
        $this->db->query('INSERT INTO customer_ads_request (worker_id, ad_id, name) VALUES (:worker_id, :ads_id, :name)');
        
        $this->db->bind(':worker_id', $data['worker']);
        $this->db->bind(':ads_id', $data['id']);
        $this->db->bind(':name', $data['name']);

        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    public function allComJobs(){
        $this->db->query('SELECT a.ads_id, c.com_name, a.category, a.created_at, a.address, a.contact, a.title, a.description, a.start_date, a.end_date, a.budget, a.work
                          FROM company_ads AS a 
                          INNER JOIN company AS c
                          ON a.reg_no = c.reg_no
                          ORDER BY a.created_at DESC');
       
        $results = $this->db->resultSet(); //results inside array

        return $results;
    }

    public function apply_Company_Jobs($data){
        $this->db->query('INSERT INTO company_ads_request (worker_id, ad_id, name) VALUES (:worker_id, :ads_id, :name)');
        
        $this->db->bind(':worker_id', $data['worker']);
        $this->db->bind(':ads_id', $data['id']);
        $this->db->bind(':name', $data['name']);

        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    public function receivePayment(){
        $this->db->query("SELECT * FROM payment WHERE worker_id='{$_SESSION['worker_id']}' ORDER BY paid_at DESC");
                        
        $row = $this->db->resultSet();

        return $row;
    }

    public function getPayment(){
        $this->db->query("SELECT * FROM `schedule` AS s JOIN invite_jobs AS i ON i.cus_id=s.cus_id
                          WHERE s.worker_id='{$_SESSION['worker_id']}' AND s.date < CURRENT_TIMESTAMP");
                        
        $row = $this->db->resultSet();

        return $row;
    }

    public function inviteCusJob(){
        $this->db->query("SELECT j.job_id, c.prof_pic, c.fname, c.lname, c.contact, j.status, j.time, j.start_date, j.address, j.budget, j.invite_at 
                          FROM `invite_jobs` AS j INNER JOIN customer AS c ON c.cus_id=j.cus_id 
                          WHERE j.worker_id='{$_SESSION['worker_id']}' AND j.status='PENDING'");

        $row = $this->db->resultSet();

        return $row;
    }

    public function inviteComJob(){
        $this->db->query("SELECT j.job_id, c.prof_pic, c.com_name, c.owner_name, c.contact, j.status, j.time, j.start_date, j.address, j.budget, j.invite_at 
                          FROM `invite_company_jobs` AS j INNER JOIN company AS c ON c.reg_no=j.reg_no 
                          WHERE j.worker_id='{$_SESSION['worker_id']}' AND j.status='PENDING'");

        $row = $this->db->resultSet();

        return $row;
    }

    public function findJobById($id){
        $this->db->query('SELECT c.fname, c.contact, i.time, i.start_date, i.address, i.budget, i.job_id FROM invite_jobs AS i JOIN customer AS c ON i.cus_id=c.cus_id WHERE i.job_id=:job_id');

        $this->db->bind(':job_id', $id);
        $row = $this->db->single();

        return $row;
    }

    public function findComJobById($id){
        $this->db->query('SELECT c.com_name, c.contact, i.time, i.start_date, i.address, i.budget, i.job_id FROM invite_company_jobs AS i JOIN company AS c ON i.reg_no=c.reg_no WHERE i.job_id=:job_id');

        $this->db->bind(':job_id', $id);
        $row = $this->db->single();

        return $row;
    }

    public function acceptJob($data){
        $this->db->query('UPDATE invite_jobs SET status="ACCEPT" WHERE job_id=:job_id');

        $this->db->bind(':job_id', $data['job_id']);
        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    public function acceptComJob($jobId){
        $this->db->query('UPDATE invite_company_jobs SET status="ACCEPT" WHERE job_id=:job_id');

        $this->db->bind(':job_id', $jobId);
        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }

    }

    public function rejectJob($id){
        $this->db->query('UPDATE invite_jobs SET status="REJECT" WHERE job_id=:job_id');

        $this->db->bind(':job_id', $id);
        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }

    }

    public function rejectComJob($jobId){
        $this->db->query('UPDATE invite_company_jobs SET status="REJECT" WHERE job_id=:job_id');

        $this->db->bind(':job_id', $jobId);
        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }

    }

    public function pendingWork(){
        $this->db->query("SELECT * FROM `schedule` AS s JOIN customer AS c ON s.cus_id=c.cus_id 
                          WHERE worker_id='{$_SESSION['worker_id']}' AND date > CURRENT_TIMESTAMP AND s.status!='FINISH' ORDER BY s.date");
                        
        $count=$this->db->resultSet();

        return $count;
    }

    public function pendingWorkCount(){
        $this->db->query("SELECT schedule_id FROM schedule
                          WHERE worker_id='{$_SESSION['worker_id']}' AND status!='FINISH'");

        $count=$this->db->rowCount();
        return $count;
    }

    public function CountInviteJobs(){
        $this->db->query('SELECT job_id FROM invite_jobs');

        $count=$this->db->rowCount();
        return $count;
    }

    public function CountInviteCompanyJobs(){
        $this->db->query('SELECT job_id FROM invite_company_jobs');

        $count=$this->db->rowCount();
        return $count;
    }

    public function completedWorks(){
        $this->db->query("SELECT schedule_id FROM schedule
                          WHERE worker_id='{$_SESSION['worker_id']}' AND status='FINISH'");

        $count=$this->db->rowCount();
        return $count;
    }

    public function appliedJobCount(){
        $this->db->query("SELECT request_id FROM company_ads_request
                          WHERE worker_id='{$_SESSION['worker_id']}'");

        $count=$this->db->rowCount();
        return $count;
    }

    public function appliedAdsCount(){
        $this->db->query("SELECT request_id FROM customer_ads_request
                          WHERE worker_id='{$_SESSION['worker_id']}'");

        $count=$this->db->rowCount();
        return $count;
    }

    public function totalWorks(){
        $this->db->query("SELECT schedule_id FROM schedule
                          WHERE worker_id='{$_SESSION['worker_id']}'");

        $count=$this->db->rowCount();
        return $count;
    }

    public function acceptjobs(){
        $this->db->query("SELECT job_id FROM invite_company_jobs
                          WHERE worker_id='{$_SESSION['worker_id']}' AND status='ACCEPT'");

        $count=$this->db->rowCount();
        return $count;
    }

    public function rejectjobs(){
        $this->db->query("SELECT job_id FROM invite_company_jobs
                          WHERE worker_id='{$_SESSION['worker_id']}' AND status='REJECT'");

        $count=$this->db->rowCount();
        return $count;
    }

    public function acceptads(){
        $this->db->query("SELECT job_id FROM invite_jobs
                          WHERE worker_id='{$_SESSION['worker_id']}' AND status='ACCEPT'");

        $count=$this->db->rowCount();
        return $count;
    }

    public function rejectads(){
        $this->db->query("SELECT job_id FROM invite_jobs
                          WHERE worker_id='{$_SESSION['worker_id']}' AND status='REJECT'");

        $count=$this->db->rowCount();
        return $count;
    }

    public function topCategory(){
        $this->db->query("SELECT* FROM category LIMIT 5");

        $row=$this->db->resultSet();
        return $row;
    }

    public function topWorker(){
        $this->db->query("SELECT p.prof_pic, w.fname, s.category1, p.district, p.city FROM worker_personal_detail AS p JOIN service AS s ON p.worker_id=s.worker_id
                          JOIN worker AS w ON w.worker_id=p.worker_id LIMIT 5");

        $row=$this->db->resultSet();
        return $row;
    }

    public function topCompany(){
        $this->db->query("SELECT* FROM company ORDER BY com_name ASC LIMIT 5");

        $row=$this->db->resultSet();
        return $row;
    }


   }
?>

