<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment: Module 06</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!-- 
Create an HTML form with the following fields:
   
Name (text input)
Email (text input)
Password (password input)    
Profile Picture (file input)    
Submit Button

Write a PHP script that:

Validates the form inputs (ensure that all fields are filled out and the email is in a valid format).
Saves the profile picture to the server in a directory named "uploads" with a unique filename.    
Adds the current date and time to the filename of the profile picture before saving it to the server.    
Saves the user's name, email, and profile picture filename to a CSV file named "users.csv".    
Starts a new session and sets a cookie with the user's name.

   
Create a new HTML page that displays the contents of the "users.csv" file in a table.

-->
<form action="#" method="post" enctype="multipart/form-data">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <label for="profile_pic">Profile Picture:</label>
      <input type="file" id="profile_pic" name="profile_pic" accept="image/*">

      <button type="submit">Submit</button>
    </form>

    <?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Validate the form inputs
  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $password = trim($_POST["password"]);
  $profile_pic = $_FILES["profile_pic"];
  $errors = array();

  if (empty($name)) {
    $errors[] = "Name is required";
  }

  if (empty($email)) {
    $errors[] = "Email is required";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Email is invalid";
  }

  if (empty($password)) {
    $errors[] = "Password is required";
  }
  if (empty($profile_pic["name"])) {
    $errors[] = "Profile picture is required";
  } else {
    $filename = uniqid() . "-" . $profile_pic["name"];
    $upload_path = "uploads/" . $filename;
    if (!move_uploaded_file($profile_pic["tmp_name"], $upload_path)) {
      $errors[] = "Failed to upload profile picture";
    }
  }



  // If there are no errors, save the user data to the CSV file and set a cookie
  if (empty($errors)) {
    $csv_data = array($name, $email, $filename, date("Y-m-d H:i:s"));
    $fp = fopen("users.csv", "a");
    fputcsv($fp, $csv_data);
    fclose($fp);

    session_start();
    setcookie("username", $name, time() + 3600);
    header("Location: users.php");
    exit;
  } else {
    echo "<ul style='margin:30px auto'>";
    foreach ($errors as $error) {
      echo "<li style ='color:red'>" . htmlspecialchars($error) . "</li>";
    }
    echo "</ul>";
  }

}
?>

</body>
</html>

<?php
//Assignment 06


