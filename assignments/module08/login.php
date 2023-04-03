<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Form</title>
	<style>
		.form-container {
			display: <?php echo isset($_POST['submit']) ? 'none' : 'block'; ?>;
		}
		.welcome-message {
			display: <?php echo isset($_POST['submit']) ? 'block' : 'none'; ?>;
		}
	</style>
</head>
<body>
	<div class="form-container">
		<h2>Login Form</h2>
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			<label>Email Address:</label><br>
			<input type="email" name="email" required><br><br>
			<label>Password:</label><br>
			<input type="password" name="password" required><br><br>
			<input type="submit" name="submit" value="Login">
		</form>
	</div>

    <?php
        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            if(empty($email) || empty($password)){
                echo "Both email and password are required.";
            }
            else{
                $found = false;
                $users = file("users.txt");
                foreach($users as $user){
                    $user_data = explode(" | ", $user);
                    $stored_email = $user_data[1];
                    $stored_password = rtrim($user_data[2]); // remove newline character
                    if($email == $stored_email && $password == $stored_password){
                        $found = true;
                        $first_name = $user_data[0];
                        echo "<div class='welcome-message'>Welcome, $first_name! You have successfully logged in.</div>";
                        break;
                    }
                }
                if(!$found){
                    echo "Invalid login credentials.";
                }
            }
        }
    ?>
</body>
</html>