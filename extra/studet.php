<html>
    <link rel="stylesheet" href="asset/css/theme.min.css">
<style>
body{
background-size:180%;
}
</style>
<body background>
<header class="cs-header" style="background-color:#fff;">
                <div class="topbar" style="padding:0px;">
                  <div class="container d-md-flex align-items-center px-0 px-xl-3">
                    <div class="d-none d-md-block text-nowrap mr-3"><img width="63" src="./image/logo.jpg" alt="COER TECH WARRIORS" class="mr-3"/><a href="#"><img width="122" src="https://www.pngitem.com/pimgs/m/609-6094516_transparent-startup-india-logo-hd-png-download.png" alt="Startup Uttarakhand"/></a></div>
                    <div class="d-flex text-md-center ml-md-auto"><a class="topbar-link pr-1 ml-4" href="#"><i class="fa fa-phone font-size-lg text-primary mr-1"></i><span class='d-sm-inline'> +91 8279272606</span><small class="d-block text-muted">(10:00 AM to 05:30 PM)</small></a>|<a class="topbar-link pr-1 ml-1" href="#"><i class="fa fa-mail font-size-lg text-primary"></i> <span class='d-sm-inline'>ujjawalpant04@gmail.com</span></a>
                    
                    </div>
                  </div>
                </div>
                <div class="navbar navbar-expand-lg navbar-light bg-light navbar-box-shadow navbar-sticky" data-scroll-header>
                    <button class="navbar-toggler ml-n2 mr-2" type="button" data-toggle="offcanvas" data-offcanvas-id="primaryMenu"><span class="navbar-toggler-icon"></span></button><img class="d-lg-none" width="118" src="/image/logo.jpg" alt="COER TECH WARRIERS"/></a>
        
                  <div class="container px-0 px-xl-3">
                    
                    <div class="d-flex align-items-center order-lg-3 ml-lg-auto">
                                    <a class="nav-link-style font-size-sm text-nowrap ml-2" href="./index.php"><i class="fa fa-user font-size-xl mr-2"></i>logout</a>
                     
                                    
                    </div>
                    
                    
                    <div class="cs-offcanvas-collapse order-lg-2" id="primaryMenu">
                      <div class="cs-offcanvas-cap navbar-box-shadow">
                        <h5 class="mt-1 mb-0">Menu</h5>
                        <button class="close lead" type="button" data-toggle="offcanvas" data-offcanvas-id="primaryMenu"><span aria-hidden="true"></span></button>
                      </div>
                      <div class="cs-offcanvas-body">
                        <!-- Menu-->
                        <ul class="navbar-nav">
                          <li class="nav-item "><a class="nav-link" href="index1.html" class="fas fa-home">Home</a></li>
        
                          <li class="nav-item"><a class="nav-link" href="about1.html">About</a></li>
                          <li class="nav-item"><a class="nav-link" href="startup1.php" >Startup</a>
                          <li class="nav-item active"><a class="nav-link" href="investor1.html">Investors</a></li>
                          <li class="nav-item"><a class="nav-link" href="iic1.php" >incubation Centers</a>
                          </li>
                          
                          <li class="nav-item"><a class="nav-link" href="success_stories.html">Success Stories</a></li>
                          
                          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle"  data-toggle="dropdown">More</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="ps.php">Problem Statements</a></li>
                              <li><a class="dropdown-item" href="contact_us.html">Contact Us</a></li>
                              <li><a class="dropdown-item" href="mentor1.html">Mentors</a></li>
                            </ul>
                          </li>                  
                        </ul>
                      </div>
                      <div class="cs-offcanvas-cap border-top"><a class="" href="index.html" ><i class="fa fa-user font-size-lg mr-2"></i>logout</a><br/>
                    </div>
                  </div>
                </div>
              </header>


<center>
<table width="1300px"height="600px">
<tr>
<td width="900px">



<?php
@session_start();
$Email=$_GET["Email"];
include('Database.php');

$link=@mysqli_connect($server,$username,$password)or Die("<font color='red'>Server not connected!!!</font>");
    mysqli_select_db($link,$database)or die("<font color='red'>Database not connected!!!</font>");     
                                                                                                                                              
$select="select *from stulog where Email='$Email'";

$rs=@mysqli_query($link,$select)or Die("<font color='red'>Query problem</font>");
$row=mysqli_fetch_array($rs);



 
    
    echo "<center>





    <table cellspacing='10px'height='500px'bordercolor='#256f5C'background='\knk\background_blue_v0011.jpg' align='center'>
    <tr><th colspan='6'align='center'bgcolor='#256f5C'height='50px'>
    <marquee direction='left'onmouseover='this.stop()'onmouseout='this.start()'behavior='alternate'>
    &nbsp;&nbsp;<font color='white' size='5'><i>WELCOME</i></font>&nbsp;&nbsp;<font color='red' size='5'> $row[1] </font></marquee></th>
    </tr>
    
    <tr>
    <td align='right'><b>Faculty Name:-</b></td><td align='center' bgcolor='white'> $row[1] </td>
    </tr>
    <tr><td colspan='6'><hr color='#256f5C'align='center'></hr></td></tr>
    
    <tr>
    <td width='200px'align='right'><b>Phone:-</b></td><td width='200px'align='center' bgcolor='white'>$row[2]</td>
    
    
    </td>
    <th align='right'>Email:-</th><td width='200px'align='center' bgcolor='white'>$row[3]</td>
    </tr>
    
    
    <tr>
    <td width='200px'align='right'><b>College Name:-</b></td><td width='200px'align='center' bgcolor='white'>$row[4]</td>
    
    </tr>
    
    <td width='200px'align='right'><b>Qualification:-</b></td><td width='200px'align='center' bgcolor='white'>$row[5]</td><tr>
    
    
    </tr>
    
    <tr>
    <td width='200px'align='right'><b>Branch:-</b></td>
    <td width='200px'align='center' bgcolor='white'>$row[6]
    </td>
    
    
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
?>
    
    
    
    
    
    
    

