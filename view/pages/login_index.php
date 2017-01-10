<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<link rel="stylesheet" href="../layout/styles/style.css" type="text/css">
</head>
<body>
	<div id="background">
    <img src="../images/general/back.png" class="stretch" alt="" />
    </div>
	<section class="loginform cf">
		<form name="login" action="../../controller/login.php" method="post" accept-charset="utf-8">
			<ul>
				<li>
					<label for="userid" >User ID</label>
					<input type="text" name="user_id" placeholder="userID" required>
				</li>
				<li>
					<label for="password">Password</label>
					<input type="password" name="password" placeholder="password" required></li>
				<li>
					<input type="submit" value="Login" name="lg">
                    <!-- <input type="submit" value="Forgot Password" name="fp"> -->
                    <input type="submit" value="Sign Up" name="su">
				</li>
			</ul>
		</form>
	</section>

	<?php

	$res1 =  mysqli_fetch_assoc(mysqli_query($conn,"select name_initials from staff where user_id = '$userid' "));
	$_SESSION['name_initials']= $res1['fullname'];


	 ?>
</body>
</html>
