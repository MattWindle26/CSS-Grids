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
      .blog-grid{
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: auto;
        grid-auto-flow: row;
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
            <a href="/example-two.php" >Blog Post Layout</a>
            <a href="/example-three.php" >Example Three</a>
            <a href="#" >Example Four</a>
            <a href="#" >Final Website</a>
          </nav>
        </div>
        <section>
          <p class="content-block content">
            Another property of the CSS Grid module is <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/grid-auto-flow" >Grid Auto Flow</a> as specified by <a href="https://developer.mozilla.org/en-US/" >Moziila Developer Network (MDN)</a> the Grid Auto Flow property controls how the items get auto-placed into the grid.
          </p>
          <p class="content-block content">To have more control over the Grid Layout, the repeat method can be used in the <strong>grid-template-columns</strong> property.</p>
          <div class="button-wrapper" >
            <div id="example-two-4col" class="button" ><p>4 Columns</p></div>
            <div id="example-two-3col" class="button" ><p>3 Columns</p></div>
            <div id="example-two-2col" class="button" ><p>2 Columns</p></div>
          </div>
          <div class="blog-grid">
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
          </div>
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
