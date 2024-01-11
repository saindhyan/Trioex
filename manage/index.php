<?php include '../includes/header.php';?>
<?php include '../includes/Database.php';

$sql="select * from signup";

$rs=mysqli_query($conn,$sql);
if($_SESSION['Role']=='Admin'){
?>
<div class="container">
<table class="table table-dark">
    <thead>
        <td>UserName</td>
        <td>Role</td>
        <td>Email</td>
        <td>Status</td>
        <td>Verify</td>
    </thead>
    <?php
    if(mysqli_num_rows($rs)>0){
  foreach($rs as $sql)
  {
    ?>
    <tr>
        <td><?php echo $sql['Full_Name']?></td>
        <td><?php echo $sql['Role']?></td>

        <td><?php echo $sql['Email']?></td>
        <td><?php echo $sql['identity']?></td>
        <td>
<a href="../verify?id=<?php echo $sql['id']?>"><button class="btn btn-success"> Verify</button></a>
    </td>
    </tr>
    <?php 
  }}
}else{
    echo "error";
}
?>
</table>
</div>