


   
    



<?php 
include "Database.php";
$s=$_FILES['img']['tmp_name'];
$d=$_SERVER['DOCUMENT_ROOT']."/success stories/success stories/Upload".$_POST['Logo'].".jpg";
$img="";
if(move_uploaded_file($s,$d))
{
    $img="./image/".$_POST['Logo'].".jpg";
}

$sname = $_POST['Sname'];
$lname = $_POST['lname'];
$lrole = $_POST['lrole'];
$tsize = $_POST['Tsize'];
$csize = $_POST['Csize'];
$typec = $_POST['TypeC'];
$address = $_POST['Address'];
$domain = $_POST['Domain'];
$about = $_POST['about'];
$vision = $_POST['vision'];
$funding = $_POST['funding'];
$valuation = $_POST['valuation'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$website = $_POST['website'];



echo $sql = "insert into register_startup(SName,team_leader,Leader_role,Team_size,CSize,Type_Company,address,Domain,About,Vi_Mi,Funding,Valuation,Email,Phone,Website,Logo)
    values('$sname','$lname','$lrole','$tsize', '$csize', '$typec', '$address', '$domain', '$about', '$vision','$funding','$valuation', '$email','$phone', '$website','$img')";

$result = $conn->query($sql);

    if($result === true){
        echo "Data Inserted Successfully";
    }
    else{
        echo"Failed";
    }
    
?>