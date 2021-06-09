
<?php
$username = $_POST['username'];
$password = $_POST['password'];

if (!empty($username) || !empty($password)){

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword ="";
    $dbname="niloy";

    $conn = new mysqli($host, $dbUsername,$dbPassword,$dbname);  

}else{
   echo "ALL Field are required";
   die();
}


?>