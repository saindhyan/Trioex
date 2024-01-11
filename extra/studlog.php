<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login and Registration</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        html,
        body {
            display: grid;
            height: 100%;
            width: 100%;
            place-items: center;
            background: -webkit-linear-gradient(left, #a445b2, #fa4299);
        }
        
        ::selection {
            background: #fa4299;
            color: #fff;
        }
        
        .wrapper {
            overflow: hidden;
            max-width: 390px;
            background: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.1);
        }
        
        .wrapper .title-text {
            display: flex;
            width: 200%;
        }
        
        .wrapper .title {
            width: 50%;
            font-size: 35px;
            font-weight: 600;
            text-align: center;
            transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }
        
        .wrapper .slide-controls {
            position: relative;
            display: flex;
            height: 50px;
            width: 100%;
            overflow: hidden;
            margin: 30px 0 10px 0;
            justify-content: space-between;
            border: 1px solid lightgrey;
            border-radius: 5px;
        }
        
        .slide-controls .slide {
            height: 100%;
            width: 100%;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            text-align: center;
            line-height: 48px;
            cursor: pointer;
            z-index: 1;
            transition: all 0.6s ease;
        }
        
        .slide-controls label.signup {
            color: #000;
        }
        
        .slide-controls .slider-tab {
            position: absolute;
            height: 100%;
            width: 50%;
            left: 0;
            z-index: 0;
            border-radius: 5px;
            background: -webkit-linear-gradient(left, #a445b2, #fa4299);
            transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }
        
        input[type="radio"] {
            display: none;
        }
        
        #signup:checked~.slider-tab {
            left: 50%;
        }
        
        #signup:checked~label.signup {
            color: #fff;
            cursor: default;
            user-select: none;
        }
        
        #signup:checked~label.login {
            color: #000;
        }
        
        #login:checked~label.signup {
            color: #000;
        }
        
        #login:checked~label.login {
            cursor: default;
            user-select: none;
        }
        
        .wrapper .form-container {
            width: 100%;
            overflow: hidden;
        }
        
        .form-container .form-inner {
            display: flex;
            width: 200%;
        }
        
        .form-container .form-inner form {
            width: 50%;
            transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }
        
        .form-inner form .field {
            height: 50px;
            width: 100%;
            margin-top: 20px;
        }
        
        .form-inner form .field input {
            height: 100%;
            width: 100%;
            outline: none;
            padding-left: 15px;
            border-radius: 5px;
            border: 1px solid lightgrey;
            border-bottom-width: 2px;
            font-size: 17px;
            transition: all 0.3s ease;
        }
        
        .form-inner form .field input:focus {
            border-color: #fc83bb;
            /* box-shadow: inset 0 0 3px #fb6aae; */
        }
        
        .form-inner form .field input::placeholder {
            color: #999;
            transition: all 0.3s ease;
        }
        
        form .field input:focus::placeholder {
            color: #b3b3b3;
        }
        
        .form-inner form .pass-link {
            margin-top: 5px;
        }
        
        .form-inner form .signup-link {
            text-align: center;
            margin-top: 30px;
        }
        
        .form-inner form .pass-link a,
        .form-inner form .signup-link a {
            color: #fa4299;
            text-decoration: none;
        }
        
        .form-inner form .pass-link a:hover,
        .form-inner form .signup-link a:hover {
            text-decoration: underline;
        }
        
        form .btn {
            height: 50px;
            width: 100%;
            border-radius: 5px;
            position: relative;
            overflow: hidden;
        }
        
        form .btn .btn-layer {
            height: 100%;
            width: 300%;
            position: absolute;
            left: -100%;
            background: -webkit-linear-gradient(right, #a445b2, #fa4299, #a445b2, #fa4299);
            border-radius: 5px;
            transition: all 0.4s ease;
            ;
        }
        
        form .btn:hover .btn-layer {
            left: 0;
        }
        
        form .btn input[type="submit"] {
            height: 100%;
            width: 100%;
            z-index: 1;
            position: relative;
            background: none;
            border: none;
            color: #fff;
            padding-left: 0;
            border-radius: 5px;
            font-size: 20px;
            font-weight: 500;
            cursor: pointer;
        }
    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
 
<body>
        
    <div class="wrapper">
        <div class="title-text">
           
            <div class="title signup">
                Signup Form
            </div>
        </div>
       
            <div class="form-inner">

                
            
                <form  onsubmit = "return Validation()" name = "RegForm" class="signup" method = "post">
                    <div class="field">
                        <input type="text" name = "Fname" placeholder="Full Name" required>
                    </div>
                    <div class="field">
                        <input type="text" name = "phone" placeholder="Phone Number" pattern="[0-9]{10}" required>
                    </div>
                    <div class="field">
                        <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name = "email" placeholder="Email Address" required>
                    </div>
                    <div class="field">
                    <input type="text" name = "Colnam" placeholder="College Name" required>
                 
                    </div>
                    <div class="field">
                    <input type="text" name = "quali" placeholder="Qualification" required>
                 
                    </div>
                    <div class="field">
                    <input type="text" name = "branch" placeholder="Branch" required>
                 
                    </div>
                    
                    <div class="field">
                        <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name = "password" placeholder="Password" onkeyup='check();' required>
                    </div>
                    <div class="field">
                        <input type="password" name = "Cpassword" id="confirm_password" placeholder="Confirm password" onkeyup='check();' required> <span id='message'></span>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" name="sub"value="Signup">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <span> Go Back</span>

    <?php
                    @session_start();
                    if(isset($_POST['sub']))
                    {
                        include('Database.php');
                        $link=@mysqli_connect($server,$username,$password)or Die("<font color='red'>Server not connected!!!</font>");
                       mysqli_select_db($link,$database)or die("<font color='red'>Database not connected!!!</font>");                                                                                                                                                
                       $data = $_POST;
                       $Fname = $_POST['Fname'];
                       $phone = $_POST['phone'];
                       $email = $_POST['email'];
                       $col = $_POST['Colnam'];
                       $quali = $_POST['quali'];
                       $branch = $_POST['branch'];
                       $pass=$_POST['password'];
                     
                       $query=mysqli_query($conn,"SELECT * FROM signup where email = '$email'");
                       if($data['password'] !== $data['Cpassword']){
                           echo "Password not matched";
                           exit;
                       }
                       if(mysqli_num_rows($query)>0){
                           echo "<font color='red' ><h3 align='center'>Email Already Exists</h3></font>";
                           exit;
                       }
                       else{
                           $sql = "insert into stulog (name,phone,email,collnam,quali,branch,pass) values('$Fname','$phone','$email','$col', '$quali', '$branch','$pass')";
                       
                       $result = $conn -> query($sql);
                       
                       if($result === true){
                           // echo "<font color='red' ><h3 align='center'>Thank You for Sign Up</h3></font>" ;
                           echo "<script>
                    
                           window.location.href='index.php';
                           
                           </script>";
                       
                       }
                       else{
                           echo"Failed";
                       }
                       }
                    }
                    ?>
    <script>
        const loginText = document.querySelector(".title-text .login");
        const loginForm = document.querySelector("form.login");
        const loginBtn = document.querySelector("label.login");
        const signupBtn = document.querySelector("label.signup");
        const signupLink = document.querySelector("form .signup-link a");
        signupBtn.onclick = (() => {
            loginForm.style.marginLeft = "-50%";
            loginText.style.marginLeft = "-50%";
        });
        loginBtn.onclick = (() => {
            loginForm.style.marginLeft = "0%";
            loginText.style.marginLeft = "0%";
        });
        signupLink.onclick = (() => {
            signupBtn.click();
            return false;
        });

        var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}





    </script>
</body>

</html>