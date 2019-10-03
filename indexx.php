<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title> HOME PAGES </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="header">
        <h2>HOME PAGES</h2>
    </div>

    <div class="content">
        <?php if(isset($_SESSION['sucess'])): ?>
            <div class="error success">
                <h3>
                    <?php   
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <?php if(isset($_SESSION["username"])):?>
            <p>WELCOME <strong><?php echo $_SESSION['usernmae']; ?></strong></p>
            <p><a href="indexx.php?logout='1'" style="color:blue;">LOGOUT</a></p>
        <?php endif ?>
    </div>



</body>
</html>
