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

    <title>Register as an Investor</title>
  </head>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 py-5">
            <h3>Register Yourself As a Investor</h3>
            <p class="mb-4">..............</p>
            <form action="Investor_register.php" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="Iname">Name of Investor</label>
                    <input type="text" class="form-control" name ="Iname" required  id="fname">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="Email">Email Id</label>
                    <input type="email" class="form-control" name = "Email" required  id="fname">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="gender">Gender</label>
                    <!-- <input type="text" class="form-control" id="lname"> -->
                  </div>    
                  <div class="form-group first">
                    <input type="checkbox" value = "Male" name = "gender" id="lname">
                    <label class=" checkin" for="Male">Male</label>
                    <input type="checkbox" value = "Female" name ="gender" id="lname">
                    <label class=" checkin" for="Female">Female</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="Country">Country</label>
                    <input type="text" name = "Country" class="form-control" required  id="fname">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="PAN">PAN</label>
                    <input type="text" name = "PAN" class="form-control" required  id="fname">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="linkedin">Linkedin URL</label>
                    <input type="text" name = "linkedin"class="form-control" required  id="fname">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="City">Which City do you live</label>
                    <input type="text" name = "City" class="form-control" required  id="fname">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="phone">Phone Number</label>
                    <input type="text" name ="phone" class="form-control" required  id="fname">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="describe">Which of the best describe you ?</label>
                    <select name="describe" id="fname">
                      <option >Business Owner</option>
                      <option >Professional</option>
                      <option >VC & PE Professional</option>
                      <option >VC & PE Fund</option>
                      <option >Angel Network</option>
                      <option >Family Office</option>
                      <option >Startup Founder</option>
                      <option >Accelerator/Incubator</option>
                      <option >Student</option>
                      <option >Other</option>
                    </select>
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="invest">Have you Invested before?</label>
                    <!-- <input type="text" class="form-control" id="lname"> -->
                  </div>    
                  <div class="form-group first">
                    <input type="checkbox" value = "Yes" name = "invest" id="lname">
                    <label class=" checkin" for="Yes">Yes</label>
                    <input type="checkbox" value = "NO" name = "invest" id="lname">
                    <label class=" checkin" for="No">No</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="budget">What is your investment budget for the year? (in INR)</label>
                    <input type="text" name = "budget" class="form-control" required  id="fname">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="Hear">How did you hear about us ?</label>
                    <select name="Hear" id="fname">
                      <option >News</option>
                      <option >Social Media</option>
                      <option >Referral From Startup</option>
                      <option >Referral from Investor</option>
                      <option >Internet Search</option>
                    </select>
                  </div>    
                </div>
                
              <div class="d-flex mb-5 mt-4 align-items-center">
                <div class="d-flex align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">I certify that all the information provided by me is accurate and I am willing to provide evidence for the same for KYC purposes when requested.</span>
                  <input type="checkbox" checked = "checked"/>
                  <div class="control__indicator"></div>
                </label>
              </div>
              </div>

              <button type="submit" name="submit"  class="btn px-5 btn-primary">Submit
              </button>

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