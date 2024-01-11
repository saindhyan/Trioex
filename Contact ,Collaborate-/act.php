<?php

include "Database.php";
$name = $_POST['Name'];
$csize = $_POST['Csize'];
$type = $_POST['TypeC'];
$address = $_POST['Address'];
$domain = $_POST['domain'];
$Email = $_POST['Email'];
$phone = $_POST['Phone'];
$website = $_POST['Website'];
$reg = $_POST['yes'];


echo $sql = "insert into Contact (Name,CSize,TypeC,Address,Domain,Email,Phone,Website,Registered_Y_N) 
values('$name', '$csize', '$type', '$address', '$domain', '$Email', '$phone', '$website', '$reg')";

$result = $conn->query($sql);

if($result === true){
    echo "Data Inserted Successfully";
    header("location:index.php");
}
else{
    echo"Failed";
}

?>