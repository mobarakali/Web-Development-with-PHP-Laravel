<?php
$title = "Our Blog";
$page = 'blog';
require_once 'includes/header.php';
?>
<!--Code For Blog page-->
    <div class="p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal">Our Blogs</h1>
        </div>
    </div>
<!-- List of Blogs-->
<main class="container py-5">
    <div class="row g-5">
        <div class="col-md-9">
            <section class="container pb-5">
                <div class="row">
                    <div class="col-md-8">
                        <img src="https://picsum.photos/600/400?" alt="Featured Post Image" class="img-fluid mb-3">
                    </div>
                    <div class="col-md-4">
                        <h3 class="mb-3">Latest Blog Post Title</h3>
                        <p class="lead">Lorem Aipsum dolor sit amet, consectetur adipiscing elit. Etiam lacinia ligula a suscipit tristique. Donec gravida velit vel sagittis fermentum. Proin malesuada pharetra mauris ac euismod. Vivamus tincidunt mauris sed ipsum hendrerit laoreet.</p>
                        <a href="single.php" class="btn btn-dark">Read More</a>
                    </div>
                </div>
            </section>

            <div class="row mb-4">
                <div class="col">
                    <div class="card">
                        <img src="https://picsum.photos/250" class="card-img-top" alt="...">

                        <div class="card-body">
                            <h5 class="card-title">Blog title</h5>
                            <p class="card-text">Some Bquick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="single.php" class="btn btn-dark">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="https://picsum.photos/250?blur" class="card-img-top" alt="...">

                        <div class="card-body">
                            <h5 class="card-title">Blog title</h5>
                            <p class="card-text">Some Cquick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="single.php" class="btn btn-dark">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="https://picsum.photos/250?grayscale" class="card-img-top" alt="...">

                        <div class="card-body">
                            <h5 class="card-title">Blog title</h5>
                            <p class="card-text">Some Dquick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="single.php" class="btn btn-dark">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://picsum.photos/250.jpg" class="card-img-top" alt="...">

                        <div class="card-body">
                            <h5 class="card-title">Blog title</h5>
                            <p class="card-text">Some Equick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="single.php" class="btn btn-dark">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://picsum.photos/250.webp" class="card-img-top" alt="...">

                        <div class="card-body">
                            <h5 class="card-title">Blog title</h5>
                            <p class="card-text">Some Fquick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="single.php" class="btn btn-dark">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://picsum.photos/250.jpg?grayscale" class="card-img-top" alt="...">

                        <div class="card-body">
                            <h5 class="card-title">Blog title</h5>
                            <p class="card-text">Some Gquick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="single.php" class="btn btn-dark">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="position-sticky" style="top: 2rem;">
                <form class="d-flex mt-lg-0" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-dark" type="submit">Search</button>
                </form>

                <div class="p-4">
                    <h4 class="fst-italic">Categories</h4>
                    <ol class="list-unstyled">
                        <li><a href="blog.php">Lavavel</a></li>
                        <li><a href="blog.php">HTML</a></li>
                        <li><a href="blog.php">CSS</a></li>
                    </ol>
                </div>
            </div>
        </div>
<!--        -->
    </div>
</main>



<?php
require_once 'includes/footer.php';