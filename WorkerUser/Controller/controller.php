<?php 

require_once './../Model/model.php';
require_once './../Model/db.con.php';

if(insertData($conn)){
    header('location: ./../bank-detail/bank-detail.php?msg=InsertSuccessful' );
    exit();
}
else{
    header('location: ./../bank-detail/bank-detail.php?msg=InsertFailed' );
    exit();
}


?>