<?php 
    session_start();

    function isLoggedIn(){
        if(isset($_SESSION['admin_id']) || isset($_SESSION['manager_id']) || isset($_SESSION['cus_id']) || isset($_SESSION['worker_id']) ||isset($_SESSION['reg_no'])){
            return true;
        }
        else{
            return false;
        }
    }