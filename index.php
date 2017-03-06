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
   <h1 class="title" >CSS Grids</h1>
  <div class="main-container" >
    <main>
      <div class="grid example-one shadow mobile" >
        <header><h1>Example One</h1></header>
        <div class="side-left" >
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <article>
          <h2>What is a CSS Grid ?</h2>
          <p>CSS Grids is a method of creating grid structures that are coded in CSS, not HTML. This allows the layout to be minipulated and changed using media queries.</p>
        </article>
        <footer><p>Example One - CSS Grid - Matthew Windle</p></footer>
      </div> <!-- end of example one -->
      <div id="example-one-grid" class="button" ><p>Show Grid</p></div>
      <div id="example-one-code" class="button" ><p>Show Code</p></div>
      <div id="example-one-mobile" class="button" ><p>Show Mobile</p></div>
      <pre class="prettyprint shadow">
        .grid.example-one{
          display: grid;
          grid-template-columns: 2fr 4fr; /* divides area into 6 */
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
    </main>
  </div>
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="/JS/ResizeSensor.js"></script>
<script src="/JS/ElementQueries.js"></script>
<script src="grid-css.js"></script>
</body>
</html>
