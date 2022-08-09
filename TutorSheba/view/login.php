<?php
include '../control/logincheck.php';
if (isset($_SESSION['logusername'])) {
    header("location:home.php");
}
?>


<!DOCTYPE html>
<html>
<title>
    Log In
</title>

<head>
    <link rel="stylesheet" type="text/css" href="../css/mycss.css">
</head>

<body>
    <div class="box login">
        <img src="../resources/login.png" class="image">
        <h2 class="header">LogIn Here</h2>
        <form action="" method="post">
            <input type="text" name="logusername" placeholder="Enter UserName"><br><br><br>
            <input type="password" name="logpassword" placeholder="Enter Password"><br><br>
            <?php
            if(!empty($error))
            {
                echo "<p id='error'> $error. </p>";
            }
            ?>
            <input name="submit" type="submit" value="LOGIN" class="button submit">
        </form>

        <br><br><br><br><br><br><br><br><br>
        <p id="register"> <a href="registration.php">Register Now </a> </p><br>
        <p> <a href="help.php">Need help?</a> </p>
    </div>
</body>

</html>