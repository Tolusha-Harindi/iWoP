<?php 
    session_start();

    function isLoggedIn(){
        if(isset($_SESSION['admin_id']) || isset($_SESSION['manager_id']) || isset($_SESSION['customer_id']) || isset($_SESSION['worker_id']) ||isset($_SESSION['company_id'])){
            return true;
        }
        else{
            return false;
        }
    }