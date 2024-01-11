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

    <title>Contact Form</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 py-5">
            <h3>Contact Form :</h3>
            <form action="act.php" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="fname">Name</label>
                    <input type="text" name = "Name" class="form-control"  id="fname">
                  </div>    
                </div>
                
                
                
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="Csize">Company Size</label>
                    <input type="number" name = "Csize" class="form-control"  id="lname">
                  </div>    
                </div>
                  <div class="form-group first">
                    <label for="TypeC"> Type of Company</label>
                    <!-- <input type="text" name = "TypeC" class="form-control" id="lname"> -->
                  </div>    
                  <div class="form-group first">
                    <input type="checkbox" name = "TypeC" id="lname">
                    <label class=" checkin" for="SME">SME</label>
                    <input type="checkbox" name = "MSME" id="lname">
                    <label class=" checkin" for="MSME">MSME</label>
                    <br>
                    <input type="checkbox" name = "CO." id="lname">
                    <label class=" checkin" for="CO.">CO.</label>
                  </div>
                
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="Address">Address</label>
                    <input type="text" name= "Address" class="form-control" id="lname">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="domain">Domain</label>
                    <input type="text" name = "domain" class="form-control"  id="lname">
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group first">
                    <label for="email">Email Address</label>
                    <input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name = "Email" type="email" class="form-control"  id="email">
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="lname">Phone Number</label>
                    <input type="text" pattern="[0-9]{10}" name = "Phone" class="form-control"  id="lname">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="lname">Website</label>
                    <input type="text" class="form-control" name = "Website"  id="lname">
                  </div>    
                </div>
              </div>
              <div class="form-group first">
                <label for="TypeC">Startup-Registered</label>
                <!-- <input type="text" class="form-control" id="lname"> -->
              </div>    
                <input style="margin-right: 5px;" type="radio" name="yes" value="Yes">Yes
                <input style="margin-right: 5px;" type="radio" name="no" value="No">No
                <br>
         
                  
              
              
              <div class="d-flex mb-5 mt-4 align-items-center">
                <div class="d-flex align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">I agree that the above information is true to my knowledge.</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
              </div>
              </div>

              <input type="submit" value="Register" class="btn px-5 btn-primary">

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
  </body>
</html>