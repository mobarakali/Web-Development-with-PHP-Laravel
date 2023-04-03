<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<h2>Registration Form</h2>
	<form method="POST" action="index.php">
		<label>First Name:</label><br>
		<input type="text" name="firstname" required><br><br>
		<label>Last Name:</label><br>
		<input type="text" name="lastname" required><br><br>
		<label>Email Address:</label><br>
		<input type="email" name="email" required><br><br>
		<label>Password:</label><br>
		<input type="password" name="password" required><br><br>
		<label>Confirm Password:</label><br>
		<input type="password" name="confirmpassword" required><br><br>
		<input type="submit" name="submit" value="Register">
	</form>
</body>
</html>
<?php
	if(isset($_POST['submit'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];

		if(empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($confirmpassword)){
			echo "All fields are required.";
		}
		elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			echo "Email address is not valid.";
		}
		elseif($password != $confirmpassword){
			echo "Passwords do not match.";
		}
		else{
            // save user registration data to file
            $file = fopen("users.txt", "a");
            fwrite($file, $firstname . " " . $lastname . " | " . $email . " | " . $password . "\n");
            fclose($file);
            echo "Registration successful.";
		}
	}
?>