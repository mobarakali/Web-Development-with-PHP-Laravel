<?php
$title = "Home Page";
$page = "home";
require_once 'includes/header.php';

?>
<section class="container py-5">
    <div class="row">
        <div class="col-md-6">
            <img src="https://picsum.photos/700/400?" alt="Featured Post Image" class="img-fluid mb-3">
        </div>
        <div class="col-md-6">
            <h3 class="mb-3">Latest Blog Post Title</h3>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lacinia ligula a suscipit tristique. Donec gravida velit vel sagittis fermentum. Proin malesuada pharetra mauris ac euismod. Vivamus tincidunt mauris sed ipsum hendrerit laoreet.</p>
            <a href="single.php" class="btn btn-primary">Read More</a>
        </div>
    </div>
</section>
<main class="container">
    <div class="row mb-2">
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">HTML</strong>
                    <h3 class="mb-0">Featured post</h3>
                    <div class="mb-1 text-muted">Nov 12</div>
                    <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="single.php" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="https://picsum.photos/300/250?" alt="">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success">CSS</strong>
                    <h3 class="mb-0">Post title</h3>
                    <div class="mb-1 text-muted">Nov 11</div>
                    <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="single.php" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="https://picsum.photos/300/250?grayscale" alt="">
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once 'includes/footer.php';