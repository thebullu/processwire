<?php
session_start();
$username ="";
$email = "";
$errors=array();

$server="localhost";
$user="root";
$pass="mysql";
$dbname="userdb";

$conn = mysqli_connect($server,$user,$pass,$dbname);

if($conn)
{
    echo "Connection Ok";
}
else{
    die("Connection Failed".mysqli_connect_error());
}

//if the register button is clicked
if(isset($_POST['register']))
{
    $username = mysql_real_escape_string($_POST['username']);
    $email = mysql_real_escape_string($_POST['email']);
    $password_1 = mysql_real_escape_string($_POST['password_1']);
    $password_2 = mysql_real_escape_string($_POST['password_2']);

    //ensure that form fields are filled properly
    if(empty($username))
    {
        array_push($errors,"USERNAME required");
    }
    if(empty($email))
    {
        array_push($errors,"EMAIL required");
    }
    if(empty($password_1))
    {
        array_push($errors,"PASSWORD required");
    }
    if(empty($password_2))
    {
        array_push($errors,"CONFIRM PASSWORD");
    }

    if(count($errors)==0)
    {
        $password=md5($password_1); //Encrypt before storing into DB
        $sql="INSERT INTO users(username,email,password)
                    VALUES('$username','$email','$password')";
        mysqli_query($conn,$sql);
        $_SESSION['username']=$username;
        $_SESSION['success']="YOU ARE NOW LOGGED IN";
        header('location: indexx.php');
    }

}
//log user in from login page
if(isset($_POST['login']))
{
    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);
    

    //ensure that form fields are filled properly
    if(empty($username))
    {
        array_push($errors,"USERNAME required");
    }
    if(empty($password))
    {
        array_push($errors,"PASSWORD required");
    }   

    if(count($errors)==0)
    {
        $password=md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==1)
        {
            //log user in
            $_SESSION['username']=$username;
            $_SESSION['success']="YOU ARE NOW LOGGED IN";
            header('location: indexx.php');
        }else{
            array_push($errors, "wrong username/password combination");
        }

    }
}

//logout
if(isset($_GET['logout']))
{
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}


?>