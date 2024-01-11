<?php

include "Database.php"; 
$data = $_POST;
$Fname = $_POST['Fname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$role = $_POST['role'];
$pass = $_POST['password'];
$Cpass = $_POST['Cpassword'];


$query=mysqli_query($conn,"SELECT * FROM signup where email = '$email'");
if($data['password'] !== $data['Cpassword']){
    echo "Password not matched";
    exit;
}
if(mysqli_num_rows($query)>0){
    echo "Email Already Exists";
    exit;
}
else{
    echo $sql = "insert into signup (Full_Name,Phone,Email,Role,Password,Confirm_Pass) values('$Fname','$phone','$email','$role', '$pass', '$Cpass')";

$result = $conn -> query($sql);

if($result === true){
    echo "Data Inserted Successfully";
}
else{
    echo"Failed";
}
}
?>