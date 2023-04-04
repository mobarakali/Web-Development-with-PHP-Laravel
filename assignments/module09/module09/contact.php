<?php
$title = "Contact Page";
$page = "contact";
require_once 'includes/header.php';
?>
<!--Contact Page Heading -->
<div class="p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal">Contact Us</h1>
        </div>
</div>
<!--Code For Contact page-->
<div class="container" style="min-height:60vh">
    <div class="row justify-content-center">
        <div  class="col-md-8 py-5">
            <form method="POST" action="process.php">
                <div class="mb-3">
                    <label for="name" class="form-label">Name<span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address<span class="text-danger">*</span></label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject<span class="text-danger">*</span></label>
                    <input type="text" name="subject" class="form-control" id="subject" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message<span class="text-danger">*</span></label>
                    <textarea name="message" class="form-control" id="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php
require_once 'includes/footer.php';
?>

