<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title> USER REGISTRATION </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
        <h2>NEW USER REGISTRATION</h2>
    </div>

    <form method="post" action="register.php">
        <!-- DISPLAY VALIDATION ERRORS HERE -->
        <?php include('errors.php');?>
        <div class="input-group">
            <label>USERNAME</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>EMAIL</label>
            <input type="text" name="email">
        </div>
        <div class="input-group">
            <label>PASSWORD</label>
            <input type="text" name="password_1">
        </div>
        <div class="input-group">
            <label>CONFIRM PASSWORD</label>
            <input type="text" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" name="register" class="btn">REGISTER</button>
        </div>
        <p>
            Already a member? <a href="login.php"> Login </a>
        </p>


    </form>
</body>
</html>
