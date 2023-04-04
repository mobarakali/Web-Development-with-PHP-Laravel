<?php
$title = "Single Blog Post";
$page = "blog";
require_once 'includes/header.php';
?>
<!-- List of Blogs-->
<main class="container py-5">
  <div class="row g-5">
    <div class="col-md-9">
      <section class="container pb-5">
        <div class="row">
          <div class="col">
              <article class="blog-post">
                <h1 class="blog-post-title mb-3">Sample blog post</h1>

                <img src="https://picsum.photos/1000/500?" alt="Featured Post Image" class="img-fluid mb-3">

                  <div class="bg-light d-flex justify-content-between p-2">
                      <p class="blog-post-meta">April 4, 2023 by <a href="#">Mobarak Ali</a></p>
                      <div class="social-share">
                          <span>Share:</span>
                          <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg></a>
                          <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
</svg></a>
                          <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
</svg></a>
                          
                      </div>
                  </div>

              <h2>Heading</h2>
              <p>This is some additional paragraph placeholder content. It has been written to fill the available space
                and show how
                a longer snippet of text affects the surrounding content. We'll repeat it often to keep the
                demonstration flowing,
                so be on the lookout for this exact same string of text.</p>
              <h3>Sub-heading</h3>
              <p>This is some additional paragraph placeholder content. It has been written to fill the available space
                and show how
                a longer snippet of text affects the surrounding content. We'll repeat it often to keep the
                demonstration flowing,
                so be on the lookout for this exact same string of text.</p>

                <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic
                    typography,
                    lists, tables, images, code, and more are all supported as expected.</p>
                <p>This is some additional paragraph placeholder content. It has been written to fill the available space
                    and show how
                    a longer snippet of text affects the surrounding content. We'll repeat it often to keep the
                    demonstration flowing,
                    so be on the lookout for this exact same string of text.</p>
                <p>This is some additional paragraph placeholder content. It has been written to fill the available space
                    and show how
                    a longer snippet of text affects the surrounding content. We'll repeat it often to keep the
                    demonstration flowing,
                    so be on the lookout for this exact same string of text.</p>
                <p><b>Single post page:</b> Create a single post page that displays the full blog post, including the title, image, content, and author. Include social sharing buttons to allow readers to share the post on social media.</p>
            </article>
          </div>
        </div>
      </section>
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
            <li><a href="#">Lavavel</a></li>
            <li><a href="#">HTML</a></li>
            <li><a href="#">CSS</a></li>
          </ol>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Tags</h4>
          <a class="btn btn-secondary btn-xs mb-1" href="#">FrontEnd</a>
          <a class="btn btn-secondary btn-xs mb-1" href="#">BackEnd</a>
          <a class="btn btn-secondary btn-xs mb-1" href="#">Coading</a>
          <a class="btn btn-secondary btn-xs mb-1" href="#">Marketing</a>
          <a class="btn btn-secondary btn-xs mb-1" href="#">SEO</a>
        </div>
      </div>
    </div>
    <!--        -->
  </div>
</main>

<?php
require_once 'includes/footer.php';