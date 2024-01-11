<?php include '../includes/header.php'?>

<title>Update Details</title>
<style>
body{
background-size:100%;
}
</style>

<


<form  enctype="multipart/form-data" method="post">
<?php

include('../includes/Database.php');

$r=$_GET['PST'];
echo "<table align='center'>

</table>
<br/>
<table align='center'width='1330px'height='20px'bgcolor='#126180'><tr><td></td></tr></table><br />


<table align='center'width='500px'border='2px'bgcolor='white'>
<tr>
<td align='center'colspan='2'bgcolor='#126180'><font color='white'size='5'>Problem Statement</font></td>
</tr>";
$link=mysqli_connect($server,$username,$password)or Die("<font color='red'>Server not connected!!!</font>");
    mysqli_select_db($link,$database)or die("<font color='red'>Database not connected!!!</font>");                                                                                                                                                
    $select="select *from problem_statements where PST='$r'";
   
    $rs=mysqli_query($link,$select)or Die("<font color='red'>Query problem</font>");
    $row=mysqli_fetch_array($rs);
echo "
<tr>
<td align='center'><font color='black'>Organization </font></td><td align='center'width='200px'>$row[1]</td>
</tr>
<tr>
<td align='center'><font color='black'>Problem Statement title </font></td><td align='center'width='200px'>$row[2]</td>
</tr>
<tr>
<td align='center'><font color='black'>Domain</font></td><td align='center'width='200px'>$row[3]</td>
</tr>
<tr>
<td align='center'><font color='black'>Description</font></td><td align='center'width='200px'>$row[3]</td>
</tr>
</table>
<br/>
<table align='center'width='500px'border='2px'bgcolor='white'>
<tr>
<td align='center'bgcolor='#126180'><font color='white'size='4'>Student Details</font></td>
</tr>

<tr align='center'><td>  Team Leader Name </td><td align='center'><input name = 'tlname' type = text></input></td></tr>
<tr align='center'><td> Team Name </td><td align='center'><input name = 'tname' type = text></input></td></tr>
<tr align='center'><td> Team Leader Phone Number </td><td align='center'><input  type = text name = 'phone'></input></td></tr>
<tr align='center'><td> Team Leader Email </td><td align='center'><input type = text name='email'></input></td></tr>
<tr align='center'><td> Submit Your PPT(against the problem statement) </td><td align='center'><input  type = 'file' name = 'image'></input></td></tr>

</table>
<br />
</tr>
</table><br />
<table align='center'><tr><td><input class='btn btn-success' type = 'submit' name ='sub'value = 'apply'></td></tr></table><br /></table>";

?>
</form>
<?php

@session_start();
                    if(isset($_POST['sub'])&&isset( $_SESSION))
                    {
                        include('../includes/Database.php');
                        $link=@mysqli_connect($server,$username,$password)or Die("<font color='red'>Server not connected!!!</font>");
                       mysqli_select_db($link,$database)or die("<font color='red'>Database not connected!!!</font>");                                                                                                                                                
                       $data = $_POST;
                       $org = $row[1];
                       $pst = $row[3];
                       $domain = $row[4];
                       $desc = $row[2];
                       $lname = $_POST['tlname'];
                       $email = $_POST['email'];
                       $tname = $_POST['tname'];
                       $phone = $_POST['phone'];
                      
                      
                      
                      $s = $_FILES['image']['tmp_name'];
                      $d=$_SERVER['DOCUMENT_ROOT']."/trioex/image".$_POST['tlname'].".pptx";
                      $img="";
                      if(move_uploaded_file($s,$d))
                      {
                         $img="./trioex/image/".$_POST['tlname'].".pptx";
                          }
                          
                      $insert="INSERT INTO orgs ( `Organization`, `PST`, `Domain`, `Description`, `Tlname`, `Tname`, `Phone`, `Email`, `PPT`) VALUES ('$org', '$pst', '$domain', '$desc', '$lname', '$tname', '$phone', '$email', NULL)";
                                              

                      $row=mysqli_query($link,$insert)or die("<font color='maroon'>Query problem</font>");
                      if(mysqli_affected_rows()>0)
                      {
                          // echo ("<font color='red'>Thank you for registration!!!!</font>");
                          header("Location: ../index.php");
                        }
                       
                        mysql_close($link);
                       }
                       ?>





       
