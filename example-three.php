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
    </pre>
  </div>
   <h1 class="title" >CSS Grids</h1>
  <div class="main-container" >
    <main>
      <div class="grid example-one shadow" >
        <header><h1>Blog Post Layout <span>- Grid Template Area</span></h1></header>
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
            Within CSS Grids there is a property that can be used on the grid childs called <strong>grid-area</strong>. This allows the child elements to be given a name (grid-area) simular to an ID that can be called upon in the grid to position the child accordingly.
          </p>
          <p class="content-block content">
            The Grid below has been coded using the grid-template-area and grid-area properties.
          </p>
          <div class="grid-template-example" >
            <div class="grid-template-header"></div>
            <div class="grid-template-leftside"></div>
            <div class="grid-template-main"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
            <div class="grid-template-rightside"></div>
            <div class="grid-template-footer"></div>
          </div>
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
