<?php
include '../control/profilecheck.php';
?>

<!DOCTYPE html>
<html>
<title>
    View Profile
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



    <div class="box registration">

        <h2 class="header">Profile</h2>

        <form action="" method="post">
            <div class="jserror">
                <label class="font"> User Name</label>
                <input type='text' name='username' value="<?php echo $username; ?>" readonly>
                <br><br>

                <label class="font"> Password</label>
                <input type='password' name='password' value="<?php echo $password; ?>" readonly>
                <br><br>

                <label class="font"> Full Name</label>
                <input type='text' name='fname' value="<?php echo $fname; ?>" readonly>
                <br><br>

                <label class="font"> E-mail</label>
                <input type='text' name='email' value="<?php echo $email ; ?>" readonly>
                <br><br>

                <label class="font"> Gender</label>
                <input type='radio' name='gender' id="male" value="male" <?php echo $male; ?> readonly>
                <label for="Male">Male</label>
                <input type='radio' name='gender' id="female" value="female" <?php echo $female; ?> readonly>
                <label for="Female">Female</label>
                <br><br>


                <label class="font"> Mobile Number</label>
                <input type='text' name='mobileno' value="<?php echo $mobileno; ?>" readonly>
                <br><br>

                <label class="font"> Date of Birth</label>
                <input type='date' id="dob" name="dob" value="<?php echo $dob; ?>" readonly>
                <br><br>

                <label class="font"> Address</label>
                <input type='text' name='address' value="<?php echo  $address; ?>" readonly>
                <br><br>

            </div>


        </form>


    </div>



</body>


</html>