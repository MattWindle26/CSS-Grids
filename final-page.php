<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CSS Grids</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="/css/final-style.css">
  <link rel="shortcut icon" type="image/png" href="/images/favicon.png"/>
</head>
<body>
<header class="shadow">
  <nav>
    <a href="/coming-soon.php" >Home</a>
    <a href="/coming-soon.php" >Work</a>
    <a class="active" href="/final-page.php" >Blog</a>
    <a href="/coming-soon.php" >Contact</a>
  </nav>
  <div class="social-media">
    <a href="" ><img src="/images/SVG-icons/facebook.svg" alt="Facebook Logo"></a>
    <a href="" ><img src="/images/SVG-icons/twitter.svg" alt="Twitter Logo"></a>
    <a href="" ><img src="/images/SVG-icons/instagram.svg" alt="Instagram Logo"></a>
  </div>
</header>

<main class="shadow">

  <div class="grid">
    <div class="featured-img" >
    </div>
    <div class="featured-details" >
      <h2>Performance and Optimisation</h2>
      <p class="small">27th Oct 2016 - Matthew Windle</p>
      <p>So, the website is finished, everything looks awesome. One question, how well does it perform?<p>

      <p>It’s all good having a website that looks good, but it’s no good if firstly, no one can find it and secondly, when people find it it takes a week to load. Luckily there are some cool tricks and tips that can help all of this.</p>
      <div class="read-more-btn" ><p><a href="/blog-post.php" >Read Blog Post</a></p></div>
    </div>
    <div class="blog-grid">
      <a href="#">
        <article>
          <img src="/images/code.jpg" alt="Woman standing on mountain with keep exploring written on a flag">
          <h2>Building my portfolio</h2>
          <p class="small">20th Oct 2016 - Matthew Windle</p>
          <p>When it comes down to starting a project one of the first things I do is figure out what the website is going to be used for, what’s the aim of the website.</p>
        </article>
      </a>
      <a href="#">
        <article>
          <img src="/images/office.jpg" alt="Woman standing on mountain with keep exploring written on a flag">
          <h2>The Industry</h2>
          <p class="small">10th Oct 2016 - Matthew Windle</p>
          <p>So you want to be part of the digital industry? Good, because it is one of the biggest growing industries in the UK right now.</p>
        </article>
      </a>
      <a href="#">
        <article>
          <img src="/images/blog-post.jpg" alt="Woman standing on mountain with keep exploring written on a flag">
          <h2>Blog Title</h2>
          <p class="small">1st March 2017 - Matthew Windle</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        </article>
      </a>
    </div>

  </div>
</main>
<footer class="shadow">
  <p class="copyright">Copyright 2017 - Matthew Windle | <a href="" >Copyright Notices</a></p>
</footer>



<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="grid-css.js"></script>
</body>
</html>
