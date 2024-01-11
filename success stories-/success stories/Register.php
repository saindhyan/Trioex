<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Register Startup</title>
  </head>
  <body>

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 py-5">
            <h3>Register Startup</h3>
            <p class="mb-4">Register Your Statrup and raise funding</p>
            <form method="post" enctype="multipart/form-data">
              <div class="row">
                <!-- <div class="col-md-6">
                <div class="form-group first">
                    <label for="Sn">id</label>
                    <input type="text" name = "Sn" required class="form-control"  id="fname">
                  </div>    
                </div>   -->
                <div class="form-group first">
                    <label for="Sname">Startup name</label>
                    <input type="text" name = "Sname" required class="form-control"  id="fname">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="lname">Team Leader Name</label>
                    <input type="text" name = "lname" required class="form-control"  id="lname">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="lrole">Team Leader Role</label>
                    <input type="text" name = "lrole" required class="form-control"  id="lname">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="Tsize">Team Size</label>
                    <input type="number" name = "Tsize" required class="form-control"  id="lname">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="Csize">Company Size</label>
                    <input type="number" name = "Csize" required class="form-control"  id="lname">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="TypeC">Type of Company</label>
                    <!-- <input type="text" class="form-control" id="lname"> -->
                  </div>    
                  <div class="form-group first">
                    <input type="checkbox" value="SME" name="TypeC" id="lname">
                    <label class=" checkin" for="SME">SME</label>
                    <input type="checkbox"name="TypeC" value="MSME" id="lname">
                    <label class=" checkin" for="MSME">MSME</label>
                    <input type="checkbox" name="TypeC" id="lname" value="PVT LTD">
                    <label class=" checkin" for="pvtltd">PVT LTD</label>
                    <input type="checkbox" name="TypeC" id="lname" value="CO.">
                    <label class=" checkin" for="CO.">CO.</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="Address">Address</label>
                    <input type="text" name = "Address" required class="form-control" id="lname">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="domain">Domain</label>
                    <input type="text" name="Domain" required class="form-control"  id="lname">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="about">About Startup</label>
                    <input type="text" name = "about" required class="form-control"  id="lname">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="vision">Vision & Mission Of startup</label>
                    <input type="text" name="vision" required class="form-control"  id="lname">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="funding">Funding Raised Till Now</label>
                    <input type="text" name="funding" required class="form-control"  id="lname">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="valuation">Total Valuation</label>
                    <input type="text" name="valuation" required class="form-control"  id="lname">
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group first">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" required class="form-control"  id="email">
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="phone">Phone Number</label>
                    <input type="text" name="phone" required class="form-control"  id="lname">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="website">Website</label>
                    <input type="text" name="website" required class="form-control"  id="lname">
                  </div>    
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group first">
                  <label for="logo">Upload Your Logo/Image</label>
                  <input type="file" required name="image" class="form-control"  id="lname">
                </div>    
              </div>
              
              
              <div class="d-flex mb-5 mt-4 align-items-center">
                <div class="d-flex align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">I agree that the above information is true to my knowledge.</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
              </div>
              </div>

              <input type="submit" name ="submit" value="Register" class="btn px-5 btn-primary">

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <?php
include('Database.php');
 $link=@mysqli_connect(HOST,USER,PASSWORD)or Die("<font color='red'>Server not connected!!!</font>");
    mysqli_select_db($link,DATABASE)or die("<font color='red'>Database not connected!!!</font>");
    
if(isset($_POST['submit']))
{
    $s=$_FILES['image']['tmp_name'];
    $d=$_SERVER['DOCUMENT_ROOT']."/success stories/success stories/Upload/".$_POST['Sname'].".jpg";
    $img="";
    if(move_uploaded_file($s,$d))
    {
        $img="../Upload/".$_POST['Sname'].".jpg";
    }
   
    $insert="insert into register_startup values('','$_POST[Sname]','$_POST[lname]','$_POST[lrole]',$_POST[Tsize],$_POST[Csize],'$_POST[TypeC]','$_POST[Address]','$_POST[Domain]','$_POST[about]','$_POST[vision]','$_POST[funding]','$_POST[valuation]','$_POST[email]','$_POST[phone]','$_POST[website]','$img')";
    $row=mysqli_query($link,$insert)or die("<font color='maroon'>Query problem</font>");
    if($insert)
    {

      echo' <script>alert("Registered Successfully")
      location.href = "/profile"
      </script>';

      exit();
    }

}
?>


  </body>
</html>