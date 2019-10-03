<?php

$server="localhost";
$username="root";
$password="mysql";
$dbname="userdb";

$conn = mysqli_connect($server,$username,$password,$dbname);

if($conn)
{
    echo "Connection Ok";
}
else{
    die("Connection Failed".mysqli_connect_error());
}


?>