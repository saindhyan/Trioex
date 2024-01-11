<html>
    <link rel="stylesheet" href="asset/css/theme.min.css">
<style>
body{
background-size:180%;
}
</style>
<body background>
<?php include '../includes/header.php'?> 



<center>
<table width="1300px"height="600px">
<tr>
<td width="900px">



<?php
if(!isset($_SESSION)){
  session_start();
}
if(isset($_SESSION['email'])){
  $Email=$_SESSION['email'];

}else{
  echo' <script>alert("You Are Logged!")
  location.href = "/"
  </script>';
  exit();
}
include('../includes/Database.php');
   
                                                                                                                                              
$sql="select * from signup where Email='$Email'";

$rs=mysqli_query($conn,$sql);
if(mysqli_num_rows($rs)>0){
  foreach($rs as $sql)
  {

$_SESSION['Role']=$sql['Role'];

$_SESSION['status']=$sql['identity'];


 
    
    echo "<center>


<table cellspacing='10px'height='500px'bordercolor='#256f5C'background='\knk\background_blue_v0011.jpg' align='center'>
<tr><th colspan='6'align='center'bgcolor='#256f5C'height='50px'>
<marquee direction='left'onmouseover='this.stop()'onmouseout='this.start()'behavior='alternate'>
&nbsp;&nbsp;<font color='white' size='5'><i>WELCOME</i></font>&nbsp;&nbsp;<font color='red' size='5'></font></marquee></th>
</tr>

<tr>
<td><b>Full Name</b></td><td align='center' bgcolor='white'>".$sql['Full_Name']."</td>
</tr>
<tr><td colspan='6'><hr color='#256f5C'align='center'></hr></td></tr>

<tr>
<td align='right'><b>Gmail:-</b></td><td align='center' bgcolor='white'>".$sql['Email']."</td>


</td>
<th align='right'>Role:-</th><td width='200px'align='center' bgcolor='white'>".$sql['Role']."</td>
</tr>









<tr><td colspan='6'><hr color='#256f5C'align='center'></hr></td></tr>







</table>

<br />
<br />
<table align='center'>
<tr>
<td>
<head>
<title></title>
<meta http-equiv='content-type' content='text/html' />
<!-- Begin Vista-Buttons.com HEAD SECTION id=vbUL_3wc42-->

<style type='text/css'>A#vbUL_3wc42a{display:none}</style>
<!-- End Vista-Buttons.com HEAD SECTION -->
</head>
<body>
<!-- Begin Vista-Buttons.com BODY SECTION id=vbUL_3wc42-->

<table id='vista-buttons_com_id3wc42' width='0' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right:0px' title ='Edit'>
<script type='text/javascript' src='edit-files/sc3wc42.js'></script>
<a id='vbUL_3wc42a' href='http://vista-buttons.com'>Javascript Cascading Menu by Vista-Buttons.com v5.7</a>
<!-- End Vista-Buttons.com BODY SECTION -->
</body>
</html></td>

</tr>
</table></center>
<br /><br />
";
  }
}
?>
<div class="Container">
  <span>Please Verify Your Details             </span><a href="../registerdetails/<?php echo $sql['Role']?>"><button class="btn btn-danger">Verify</button></a>
</div>
    
    
    
    
    
    
    

