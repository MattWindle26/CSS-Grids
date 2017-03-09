<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <img class="logo" src="/images/logo.png" alt="Circle grid logo" width="100">
  <title>CSS Grids</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" type="image/png" href="/images/favicon.png"/>
</head>
<body>
  <div class="overlay" >
    <img class="close-btn" src="/images/error.svg" width="50px">
    <pre class="prettyprint shadow">
      .grid.example-one{
        display: grid;
        grid-template-columns: 2fr 4fr;
        grid-template-rows: auto auto;
        grid-column-gap: 2em;
        grid-row-gap: 20px;
      }
      .grid.example-one header{
        grid-column: 1 / 3;
        grid-row: 1 / 2;
        padding: 20px;
      }
      .grid.example-one .side-left{
        grid-column: 1 / 2;
        grid-row: 2 / 4;
        padding: 20px;
      }
      .grid.example-one article{
        grid-column: 2 / 3;
        grid-row: 2 / 3;
        padding: 20px;
      }
      .grid.example-one footer{
        grid-column: 2 / 3;
        grid-row: 3 / 4;
        padding: 20px;
      }
    </pre>
  </div>
   <h1 class="title" >CSS Grids</h1>
  <div class="main-container" >
    <main>
      <div class="grid example-one shadow" >
        <header><h1>Blog Post Layout <span>- Grid Auto Flow</span></h1></header>
        <div class="side-left" >
          <nav>
            <a href="/index.php" >What are CSS Grids</a>
            <a href="example-two.php" >Blog Post Layout</a>
            <a href="#" >Example Three</a>
            <a href="#" >Example Four</a>
            <a href="#" >Final Website</a>
          </nav>
        </div>
        <section class="blog-grid">
          <div class="content-block" >
            <p class="content">If we know that we are going to have repeated rows or columns then with CSS Grids this is an easy task to complete. </p>
          </div>
          <article>
            <img src="/images/blog-post.jpg" alt="Woman standing on mountain with keep exploring written on a flag">
            <h2>Performance and optimisation</h2>
            <p class="small">1st March 2017 - Matthew Windle</p>
            <p>It’s all good having a website that looks good, but it’s no good if firstly, no one can find it and secondly, when people find it it takes a week to load.</p>
          </article>
          <article>
            <img src="/images/code.jpg" alt="Woman standing on mountain with keep exploring written on a flag">
            <h2>Building my portfolio</h2>
            <p class="small">1st March 2017 - Matthew Windle</p>
            <p>When it comes down to starting a project one of the first things I do is figure out what the website is going to be used for, what’s the aim of the website.</p>
          </article>
          <article>
            <img src="/images/office.jpg" alt="Woman standing on mountain with keep exploring written on a flag">
            <h2>The Industry</h2>
            <p class="small">1st March 2017 - Matthew Windle</p>
            <p>So you want to be part of the digital industry? Good, because it is one of the biggest growing industries in the UK right now.</p>
          </article>
          <article>
            <img src="/images/blog-post.jpg" alt="Woman standing on mountain with keep exploring written on a flag">
            <h2>Blog Title</h2>
            <p class="small">1st March 2017 - Matthew Windle</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
          </article>
        </section>
        <footer><p>Example Two - CSS Grid - Matthew Windle</p></footer>
      </div> <!-- end of example one -->
      <div class="button-wrapper" >
        <div id="example-one-code" class="button" ><p>Show CSS</p></div>
      </div>

    </main>
  </div>
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="grid-css.js"></script>
</body>
</html>
