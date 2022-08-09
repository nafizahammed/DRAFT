<?php
include '../control/securitycheck.php';
?>


<!DOCTYPE html>
<html>

<title>
    Security
</title>

<head>
    <link rel="stylesheet" type="text/css" href="../css/mycss.css">

</head>

<body>
    <br>
    <div class="navigation">
        <nav>
            <div>
                <a href="home.php">Home</a>
                <a href="requestTution.php">Request Tution</a>
                <a href="viewprofile.php">View Profile</a>
                <a href="updateprofile.php">Update Profile</a>
                <a href="security.php">Security</a>

                <a href="../control/logoutcheck.php" class="logout">Log Out</a>
            </div>
        </nav>
    </div>


    <body>
        <div class="box security">
            <img src="../resources/security.png" class="image">

            <h2 class="header">Security</h2>

            <form name="security" action="" onsubmit="return securityvalidation()" method="post">
                <div class="jserror">


                    <label class="font">Old Password</label>
                    <input type='password' name='oldpassword' id="oldpassword">
                    <br>
                    <p id="oldpassworderror"></p>


                    <label class="font">New Password</label>
                    <input type='password' name='newpassword' id="newpassword">
                    <br>
                    <p id="newpassworderror"></p>


                    <label class="font">Confirm Password</label><br>
                    <input type='password' name='confirmpassword' id="confirmpassword">
                    <br>
                    <p id="confirmpassworderror"></p>



                </div>


                <input type='submit' name='submit' value='Confirm' class="button submit">

            </form>

            <br>
            <p id="error"> <?php echo $error; ?></p>
            <br>

        </div>
        <script src="../js/securityvalidation.js"></script>

    </body>

</html>