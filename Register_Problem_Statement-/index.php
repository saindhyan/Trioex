<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Problem Statement</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 py-5">
            <h3>Register Problem Statement</h3>
            <p class="mb-4">Register Problem Statement</p>
            <form  method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="Org">Organization</label>
                    <input type="text" name = "Organization" class="form-control"  id="fname">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="Ptitle">Problem statement Name</label>
                    <input type="text" name="PSN" class="form-control"  id="lname">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="PSno.">Problem statement Description</label>
                    <input type="text" name = "PSD"class="form-control"  id="lname">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="domain">Domain</label>
                    <input type="text" name="domain" class="form-control"  id="lname">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="date">Date of Submission</label>
                    <input type="date" name="date" class="form-control"  id="lname">
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

              <input type="submit" name='sub' value="Register" class="btn px-5 btn-primary">

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
  <?php
                    @session_start();
                    if(isset($_POST['sub']))
                    {
                        include('Database.php');
                        $link=@mysqli_connect($server,$username,$password)or Die("<font color='red'>Server not connected!!!</font>");
                       mysqli_select_db($link,$database)or die("<font color='red'>Database not connected!!!</font>");                                                                                                                                                
                       $data = $_POST;
                       $Fname = $_POST['Organization'];
                       $phone = $_POST['PSN'];
                       $email = $_POST['PSD'];
                       $col = $_POST['domain'];
                       $quali = $_POST['date'];
                       
                     
                       $query=mysqli_query($conn,"SELECT * FROM problem_statements where Description = '$email'");
                      
                       if(mysqli_num_rows($query)>0){
                           echo "<font color='red' ><h3 align='center'>Email Already Exists</h3></font>";
                           exit;
                       }
                       else{
                           $sql = "insert into problem_statements(Organization,PST,Description,domain,date) values('$Fname','$phone','$email','$col', '$quali')";
                       
                       $result = $conn -> query($sql);
                       
                       if($result === true){
                           // echo "<font color='red' ><h3 align='center'>Thank You for Sign Up</h3></font>" ;
                           echo "<script>
                    
                           window.location.href='problem_statement.php';
                           
                           </script>";
                       
                       }
                       else{
                           echo"Failed";
                       }
                       }
                    }
                    ?>
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>