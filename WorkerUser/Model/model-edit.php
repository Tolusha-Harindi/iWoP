<?php

function editData($conn){
	$qry="select full_name,bank_name,branch,code,account_no from bank";
	$stmt = $conn->prepare($qry);
	$stmt->execute();
	$result = $stmt->get_result();
    while ($row = $result->fetch_assoc()):
}
?>