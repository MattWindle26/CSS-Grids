<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CSS Grids</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="/css/main-style.css">
  <link rel="shortcut icon" type="image/png" href="/images/favicon.png"/>
</head>
<body>
  <div class="overlay" >
    <img class="close-btn" src="/images/error.svg" width="50px">
    <pre class="prettyprint shadow">
    </pre>
  </div>
  <img class="logo" src="/images/logo.png" alt="Circle grid logo" width="100">
   <h1 class="title" >CSS Grids</h1>
  <div class="main-container" >
    <main>
      <div class="grid example-one shadow" >
        <header><h1>Blog Post Layout <span>- Grid Template Area</span></h1></header>
        <div class="side-left" >
          <nav>
            <a href="/index.php" >What are CSS Grids</a>
            <a href="/example-two.php" >Blog Post Grid </a>
            <a href="/example-three.php" >Blog Post</a>
            <a href="/final-page.php" >Final Website</a>
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
            <div class="grid-template-header">
              <h2>Performance and optimisation</h2>
              <h3>27th October 2016 - Matthew Windle</h3>
            </div>
            <div class="grid-template-breadcrumbs" >
              <ul class="breadcrumbs">
                <li>Blog</li>
                <li>Performance and Optimisation</li>
              </ul>
            </div>
            <div class="grid-template-leftside">
              <p>Archive</p>
              <ul class="archive">
                <a href="#"><li>Feb 16</li></a>
                <a href="#"><li>Mar 16</li></a>
                <a href="#"><li>Jun 16</li></a>
                <a href="#"><li>Jul 16</li></a>
              </ul>
            </div>
            <div class="grid-template-main">
              <h3>It's not the end of the project yet</h3>
                    <p>So, the website is finished, everything looks awesome. One question, how well does it perform? </p>

              <p>It’s all good having a website that looks good, but it’s no good if firstly, no one can find it and secondly, when people find it it takes a week to load. Luckily there are some cool tricks and tips that can help all of this. </p>

              <p>Below I have outline some simple techniques that can make sure your website(s) help not only yourself as a developer, but your visitors too! </p>

                <h3>Code validation</h3>
                <p>Making sure you code validates is a crucial part of making your website. As outlined by W3C’s <a href=" https://validator.w3.org/docs/why.html" title="Read Why Validate by W3C" >Why Validate </a> document “Validation is a sign of professionalism”. Imagine you are a freelance website developer and your website which helps drive your business doesn’t validate, this may cost you a client in the future.</p>

                <p>If you are sat there wondering “how do I know if my website validates or not” W3C have you covered with there <a href="https://validator.w3.org/ " title="W3C HTML Validation Tool" >HTML Validation Tool.</a> The tool allows you to test via URL, file upload or direct code. The report then simple shows what lines have an error if any.</p>

                <h3>Page optimisation</h3>
                  <p>Does all you code validate? Great, lets move on to optimising the page.</p>
                  <p>If you have read my other blog post <a href="/blog/building-my-portfolio.php" title="read my other blog post building my portfolio">building my portfolio</a> you will know that more and more people are viewing the web on a mobile device. Baring this in mind most users will have a limited data plan, so every time they visit a web page it is costing them to see your content. </p>
                  <h4>What can you do to help? </h4><br>

                  <p>Well like the code validation tool there is a tool to check how well your website performs in speed and user experience. Google provide the <a href="https://developers.google.com/speed/pagespeed/insights/" >PageSpeed Insights </a>. All you need to do is provide the URL of the website you want to test and you receive a detailed report outlining how the page can be more optimised. </p>

                  <a href="http://matthewwindle.com/blog/performance-and-optimisation.php" >Read the full post</a>

            </div>
            <div class="grid-template-rightside">
              <p class="advert-text" >Advertisement</p>
              <img src="/images/mw-logo.png" alt="advertisment example" >
            </div>
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
