<?php

include "Database.php";
$name = $_POST['Iname'];
$email = $_POST['Email'];
$gender = $_POST['gender'];
$country = $_POST['Country'];
$pan = $_POST['PAN'];
$linkedin = $_POST['linkedin'];
$City = $_POST['City'];
$phone = $_POST['phone'];
$describe = $_POST['describe'];
$invest = $_POST['invest'];
$budget = $_POST['budget'];
$hear = $_POST['Hear'];


echo $sql = "insert into register_investor (Name_Investor,Email,Gender,	Country,PAN,linkedin,City,Phone_Number,De_scribe,Invested,Budget,Hear) 
values('$name','$email','$gender', '$country','$pan','$linkedin','$City', '$phone','$describe', '$invest', '$budget', '$hear')";

$result = $conn->query($sql);

if($result === true){
    echo "Data Inserted Successfully";
    header("location:index.php");
}
else{
    echo"Failed";
}

?>