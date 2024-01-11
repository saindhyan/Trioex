<?php 
include "Database.php";

$Email = $_POST['Email'];
$pass = $_POST['Password'];
$Role = $_POST['Role'];

//to prevent from mysqli injection
$Email = stripcslashes($Email);
$pass = stripcslashes($pass);
$Role = stripcslashes($Role);
$Email = mysqli_real_escape_string($conn, $Email);
$pass = mysqli_real_escape_string($conn, $pass);
$Role = mysqli_real_escape_string($conn, $Role);

$sql = "select * from signup where Email = '$Email' and Password = '$pass' and Role = '$Role'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count == 1){
    // echo "<h1><center> Login Successful </center></h1>";
    header("location:index.php");
}
else{
    echo "<h1>Login Failed. Invalid username or password or role</h1>";
}
