<?php
include '../includes/Database.php';
$id=$_GET['id'];
$sql = "UPDATE `signup` SET `identity` = 'Verified',`public` = '1' WHERE `signup`.`id` = '".$id."'";

$result = $conn -> query($sql);
if($result){
    echo' <script>alert("Verified")
location.href = "/manage"
</script>';
exit();
}
?>
