<?php
include '../control/profilecheck.php';
?>

<!DOCTYPE html>
<html>
<title>
    Update Profile
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

        <h2 class="header">Update Profile</h2>

        <form action="" method="post">
            <div class="jserror">
                <label class="font"> User Name</label>
                <p id="showinfo"><?php echo $username; ?></p>
                <br><br>


                <label class="font"> Full Name</label>
                <input type='text' name='fname' id="fname" value="<?php echo $fname; ?>">
                <p id="fnameerror"></p>

                <label class="font"> E-mail</label>
                <input type='text' name='email' id="email" value="<?php echo $email ; ?>">
                <p id="emailerror"></p>

                <label class="font"> Gender</label>
                <input type='radio' name='gender' id="male" value="male" <?php echo $male; ?>>
                <label for="Male">Male</label>
                <input type='radio' name='gender' id="female" value="female" <?php echo $female; ?>>
                <label for="Female">Female</label>
                <p id="gendererror"></p>


                <label class="font"> Mobile Number</label>
                <input type='text' name='mobileno' id="mobileno" value="<?php echo $mobileno; ?>">
                <p id="mobilenumbererror"></p>

                <label class="font"> Date of Birth</label>
                <input type='date' id="dob" name="dob" value="<?php echo $dob; ?>">
                <p id="doberror"></p>

                <label class="font"> Address</label>
                <input type='text' name='address' id="address" value="<?php echo  $address; ?>">
                <p id="addresserror"></p>

            </div>
            <input type='submit' name='update' value='Update Profile' class="button submit">

        </form>


    </div>



</body>


</html>