

<?php 

session_start(); 

include('../includes/Database.php');

if (isset($_POST['Email']) && isset($_POST['pwd'])) {
    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);
        
       return $data;

    }

    $uname = validate(strtolower($_POST['Email']));

    $pass = validate($_POST['pwd']);

    if (empty($uname)) {

        echo' <script>alert("Email is required")
        history.back()
        </script>';
        exit();

    }else if(empty($pass)){

        echo' <script>alert("password is required")
        history.back()
                </script>';
        exit();

    }else{

        $sql = "SELECT * FROM signup WHERE Email='$uname' AND Password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['Email'] === $uname && $row['Password'] === $pass) {

                echo "Logged in!";

                $_SESSION['email'] = $row['Email'];
                $_SESSION['id'] = $row['id'];
                    
                        
                            header("Location: ../profile");
                            exit();
                        
                      
            }else{

                echo' <script>alert("credintial missmatch")
                history.back()
                </script>';
                exit();

            }

        }else{

            echo' <script>alert("credintial missmatch")
            history.back()
            </script>';
            exit();

        }

    }

}else{
    echo' <script>
    history.back()
    </script>';

    exit();

}
?>
