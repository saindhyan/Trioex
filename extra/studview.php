<?php

include "Database.php";
$org = $_POST['Organization'];
$PSN = $_POST['PSN'];
$PSD = $_POST['PSD'];
$domain = $_POST['domain'];



echo $sql = "insert into problem_statements (Organization,PST,Description,Domain) 
values('$org', '$PSN', '$PSD', '$domain')";

$result = $conn->query($sql);

if($result === true){
    echo "Data Inserted Successfully";
    header("location:index.php");
}
else{
    echo"Failed";
}

?>