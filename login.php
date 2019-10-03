<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title> USER LOGIN </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
        <h2>USER LOGIN</h2>
    </div>

    <form method="post" action="login.php">
        <!-- DISPLAY VALIDATION ERRORS HERE -->
        <?php include('errors.php');?>
        <div class="input-group">
            <label>USERNAME</label>
            <input type="text" name="username">
        </div>
        
        <div class="input-group">
            <label>PASSWORD</label>
            <input type="text" name="password">
        </div>
        
        <div class="input-group">
            <button type="submit" name="login" class="btn">LOGIN</button>
        </div>
        <p>
            NOT A MEMBER? <a href="register.php"> REGISTER </a>
        </p>


    </form>
</body>
</html>
