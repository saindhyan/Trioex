<?php

include "Database.php";
$name = $_POST['Name'];
$csize = $_POST['comp'];
$type = $_POST['first'];
$address = $_POST['address'];
$domain = $_POST['domain'];
$Email = $_POST['email'];
$phone = $_POST['phone'];
$website = $_POST['website'];
$describe = $_POST['comment'];


echo $sql = "insert into Contact (Name,CSize,TypeC,Address,Domain,Email,Phone,Website) 
values('$name', '$csize', '$type', '$address', '$domain', '$Email', '$phone', '$website', '$describe')";

$result = $conn->query($sql);

if($result === true){
    echo "Data Inserted Successfully";
    header("location:index.php");
}
else{
    echo"Failed";
}

?>