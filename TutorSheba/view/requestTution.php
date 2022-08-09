<?php
include '../control/requestTutioncheck.php';
?>


<!DOCTYPE html>
<html>

<title>
    Request Tution
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
</body>

<body>
    <div class="box forTution">

        <h2 class="header">Request for a Tution</h2>

        <form action="" method="post">
            <div class="jserror">
                <label class="font"> Name </label>
                <input type="text" name="name" value="<?php echo $_SESSION["fullname"]; ?>" readonly><br><br>
                <label class="font"> Contact Number/Address</label>
                <input type="text" name="contact" value="<?php echo $contact ?>"><br><br>

                <label class="font"> Select District</label>
                <select id="district" name="district">

                    <option value="<?php echo $district; ?>"> <?php echo $district; ?></option>

                    <option value="Dhaka">Dhaka</option>
                    <option value="Rajshahi">Rajshahi</option>


                </select>

                <label class="font"> Select Area</label>
                <select id="area" name="area">
                    <option value="<?php echo $area; ?>"> <?php echo $area; ?></option>

                    <option value="Saheb Bajar">Saheb Bazar</option>
                    <option value="Jhautola">Jhautola</option>


                </select>
                <br><br>

                <label class="font"> Select Medium</label>
                <select id="Medium" name="medium">
                    <option value="<?php echo $medium; ?>"> <?php echo $medium; ?></option>

                    <option value="bangla">Bangla</option>
                    <option value="english">English</option>

                </select>

                <label class="font"> Select Class</label>
                <select id="class" name="class">
                    <option value="<?php echo $class; ?>"> <?php echo $class; ?></option>

                    <option value="11-12">11-12</option>
                    <option value="9-10">9-10</option>


                </select><br><br>

                <label class="font"> Select Subject</label>
                <select id="subject" name="subject">
                    <option value="<?php echo $subject; ?>"> <?php echo $subject; ?></option>

                    <option value="bangla">Bangla</option>
                    <option value="english">English</option>
                    <option value="math">Math</option>

                </select>

            </div>
            <p id="error"> <?php echo $error; ?></p>

            <input type='submit' name='submit' value='Submit' class="button submit">
            <input type='submit' name='update' value='update' class="button submit"><br><br>
            <input type='submit' name='delete' value='Delete' class="button delete">


        </form>

        <br>

        <br>

    </div>

</body>

</html>