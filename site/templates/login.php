<?php
include("C:\Program Files (x86)\Ampps\www\procwire\site\connection.php");
error_reporting(0);



?>

<html>
<body>
<form method="POST" action=""> 
    USERNAME:
    <input type="text" name="email_id"/>
    <input type="submit" name="Hop_in" value="Hop in"/>
    
</form>
<?php
if(isset($_POST['email_id']))
{
    $search = $_POST['email_id'];
    $query = mysql_query("SELECT user_id FROM table1") or die("table connection failed");
    $count=mysql_num_rows($query);
    if($count == 0)
    {
        $output = 'No Such user';
    }
    else{
        while($row = mysql_fetch_array($query))
        {
            $id=row['user_id'];

            $output.='<div>'.$id.' '.'</div>';
        }
    }

}
print("$output");
?>

<br>
Register:
    <a href="<?php echo $page->link; ?>">Signup</a>;
</body>
</html>

