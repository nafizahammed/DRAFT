<?php

session_start();

if (empty($_SESSION["logusername"])) {
    header("Location:login.php");
}
?>


<!DOCTYPE html>
<html>
<title>
    Home
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
    <span>Hellow,</span>
    <span><?php echo $_SESSION["fullname"];?> </span>
</body>

<body>
    <div class="box home">
        <div class="search">
            <label class="font">Area</label>
            <input type="text" name="searchbyarea" id="searchbyarea" placeholder="Enter Area Name">


            <label class="font">Class</label>
            <input type="text" name="searchbyclass" id="searchbyclass" placeholder="Enter Class">

            <label class="font">Subject</label>
            <input type="text" name="searchbysubject" id="searchbysubject" placeholder="Enter Subject">

            <p id="error"></p>
            <button id="search" onclick=" AjaxFunction()" class="button submit"> Search </button>
            <center>
                <p id="message" class="message"></p>
            </center>


        </div>



    </div>

    <script src="../js/ajaxsearch.js"></script>
</body>






</html>