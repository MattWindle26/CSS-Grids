<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CSS Grids</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="style.css">
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
      <div class="grid example-one shadow mobile" >
        <header><h1>Example One <span> - What is a CSS Grid ?</span></h1></header>
        <div class="side-left" >
          <nav>
            <a href="/index.php" >What are CSS Grids</a>
            <a href="example-two.php" >Example Two</a>
            <a href="#" >Example Three</a>
            <a href="#" >Example Four</a>
            <a href="#" >Final Website</a>
          </nav>

        </div>
        <article>
          <p class="content">CSS Grids is a method of creating grid structures that are coded in CSS, not HTML. This allows the layout to be minipulated and changed using media queries.</p>
          <p class="content">Webpages have changed a lot over the years with how content was set out on a page. It started off with table layouts, then floats, which followed onto positioning and inline-blocks, but these methods were missing a lot of important functions.</p>
        </article>
        <footer><p>Example One - CSS Grid - Matthew Windle</p></footer>
      </div> <!-- end of example one -->
      <div class="button-wrapper" >
        <div id="example-one-grid" class="button" ><p>Show Grid</p></div>
        <div id="example-one-code" class="button" ><p>Show CSS</p></div>
      </div>

    </main>
  </div>
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="grid-css.js"></script>
</body>
</html>
