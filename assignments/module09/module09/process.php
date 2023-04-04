<?php
$title = "Process Page";
$page = "contact";
require_once 'includes/header.php';
?>
<!--Contact Page Heading -->

<?php
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Validate the form data
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        // If any of the fields are empty, show an error message
        $error_msg = 'Please enter all required fields.';
    } else {
        // If all fields are filled out, send the email
        $to = 'mobarak.ali@gmail.com';
        $headers = "From: $name <$email>";
        $message_body = "Name: $name\n\nEmail: $email\n\nSubject: $subject\n\nMessage:\n$message";
        if (mail($to, $subject, $message_body, $headers)) {
            // If the email was sent successfully, show a success message
            $success_msg = 'Thank you for your message!';
            // Clear the form data to prevent resubmission
            $name = '';
            $email = '';
            $subject = '';
            $message = '';
        } else {
            // If there was an error sending the email, show an error message
            $error_msg = 'There was a problem sending your message. Please try again later.';
        }
    }
}
?>

<div class="p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
        <?php if (!empty($success_msg)) : ?>
            <h1 class="display-4 fw-normal"> <?php echo $success_msg;  ?> </h1>
        <?php endif; ?>
        <?php if (!empty($error_msg)) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error_msg; ?>
                </div>
        <?php endif; ?>
        </div>
</div>

<?php require_once 'includes/footer.php'; ?>