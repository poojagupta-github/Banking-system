<?php
$servername="localhost";
$username="root";
$password = "";
$database="bank";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("unable to connect");

}

// else{
//     echo "Connection successful <br>";
// }

?>