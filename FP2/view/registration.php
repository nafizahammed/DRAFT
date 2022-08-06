	 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
	<h1><?php include "nav.php";?></h1>
</head>

<body>

<style>
	.button{
		background-color: black;
    color: white;
    padding: 10px;
    font-weight: bold;
    border-radius: 10%;
	}
</style>

	

	<form method="POST" action="../controller/registrationAction.php" novalidate>
		<fieldset>
			<?php 
			if(isset($_SESSION['msg']) and !empty($_SESSION['msg'])) {
				echo $_SESSION['msg'];
				echo "<br><br>";
			}
			
			?>
			<legend> Sign Up For Reseller</legend>
			<label for="fname">Full Name </label> 
			<br>
			<input type="text" name="fullname" id="fullname" required>
			
			<br> <br>

			<label for="username">Username</label>
			<br>
			<input type="text" name="username" id="username" required>
			<!-- <span style="color: red">*<?php echo $usernameErrMsg; ?></span> -->
			<br> <br>


			<label for="email">Email</label>
			<br>
			<input type="email" name="email" id="email" required>
			<!-- <span style="color: red">*<?php echo $emailErrMsg; ?></span> -->
			<br> <br>


			<label for="password">Password</label>
			<br>
			<input type="password" name="password" id="password" required>
			<!-- <span style="color: red">*<?php echo $passwordErrMsg; ?></span> -->
			<br> <br>

		</fieldset>

		<input class="button" type="submit" name="submit" value="Register">


 
		</form>





		<?php include "footer.php"?>

		
</body>
</html>