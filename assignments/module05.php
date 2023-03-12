<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 05</title>
</head>
<body>
<?php
/** Task 1
 * 
 * Create an HTML form that allows users to input their name and email address. The form should have two fields: one for name and one for email. Use appropriate HTML tags to structure the form.
 */
?>
<form action="#" method="POST">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>

  <button type="submit">Submit</button>
</form>

<hr>
<?php
/** Task 2
 * 
 * Create a PHP class called "Person" with the following properties and methods:
 * Properties:
 * Name, Email
 * 
 * Methods:
 * setName($name): sets the name property
 * setEmail($email): sets the email property
 * getName(): returns the name property
 * getEmail(): returns the email property
 * 
 * Create an instance of the Person class and set the name and email properties. Use the getName() and getEmail() methods to display the properties on the webpage.
 */

// Declear the Person class
class Person{

    protected $name;
    protected $email;

    /*
    public function __construct($name, $email){
        $this->name = $name;
        $this->email = $email;
    } 
    */

    public function setName($pesonName){
        $this->name = $pesonName;
    }

    public function setEmail($personEmail){
        $this->email = $personEmail;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

}



// create a new instance of the Person class
// $p1 = new Person('Mobarak Ali', 'mobarak.ali@gmail.com');
$p1 = new Person();

// set the name and email properties
$p1->setName("Mobarak Ali");
$p1->setEmail("mobarak.ali@gmail.com");

// display the properties on the webpage
echo "Name: " . $p1->getName() . "<br>";
echo "Email: " . $p1->getEmail() . "<br>";
?>
<hr>
<?php
/** Task 3
 * 
 * Create a PHP script that retrieves the user's name and email from the HTML form in Task 1 using the $_POST superglobal variable. Create a new instance of the Person class and use the setName() and setEmail() methods to set the name and email properties based on the form data. Use the getName() and getEmail() methods to display the properties on the webpage.
 */

    // Check if form data has been submitted
    // if (isset($_POST['name']) && isset($_POST['email']))
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      // Retrieve the name and email from the form data
      $name = $_POST['name'];
      $email = $_POST['email']; 
      
      // Create a new instance of the Person class
      $p2 = new Person();
      
      // Set the name and email properties of the Person object
      $p2->setName($name);
      $p2->setEmail($email);
      
      // Display the name and email properties of the Person object
      echo "<p>Thank you, <b> {$p2->getName()}</b>! We have received your email address, <b> {$p2->getEmail()}</b>.</p>";

    }
    ?>

</body>
</html>