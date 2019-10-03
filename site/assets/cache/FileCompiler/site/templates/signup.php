<?php
 include(\ProcessWire\wire('files')->compile("C:\Program Files (x86)\Ampps\www\procwire\site\connection.php",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));
error_reporting(0);
?>
<?php

echo $_POST['email_id'];

?>

<html>
<body>
<h3> NEW USER REGISTRATION </h3> 
<form method="GET" action=""> 
    USERNAME:
    <input type="text" name="email_id"/>
    <input type="submit" name="Enrol_me" value="Register me"/>
    
</form>

<?php
$us = $_GET['email_id'];
$query = "INSERT INTO table1 VALUES ('$us')";
$data = mysqli_query($conn,$query);
if($data)
{
	echo "Data inserted into Database";
}
	
?>



</body>
</html>
