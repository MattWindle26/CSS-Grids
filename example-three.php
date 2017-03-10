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

        </section>
        <footer><p>Example Three - CSS Grid - Matthew Windle</p></footer>
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
