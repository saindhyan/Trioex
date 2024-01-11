<?php 

$server = "localhost";
$username = "id19444915_root";
$password = "(K3b~Y?&[Uw>9yTx";
$database = "id19444915_sih";

$conn = new mysqli($server, $username, $password, $database);

if($conn -> connect_error){
    echo "failed";
}
else
    echo "connection established";

?>