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
    <a href="" ><img src="/images/facebook.svg" alt="Facebook Logo"></a>
    <a href="" ><img src="/images/twitter.svg" alt="Twitter Logo"></a>
    <a href="" ><img src="/images/instagram.svg" alt="Instagram Logo"></a>
  </div>
</header>

<main class="shadow">

  <div class="post-grid">
    <div class="post-image"></div>
    <div class="blog-post-header">
      <h1>Performance and Optimisation</h1>
    </div>
    <article class="main-post">
      <h2>It's not the end of the project yet</h2>
      <p>So, the website is finished, everything looks awesome. One question, how well does it perform? </p>

      <p>It’s all good having a website that looks good, but it’s no good if firstly, no one can find it and secondly, when people find it it takes a week to load. Luckily there are some cool tricks and tips that can help all of this. </p>

      <p>Below I have outline some simple techniques that can make sure your website(s) help not only yourself as a developer, but your visitors too! </p>

      <h2>Code validation</h2>
      <p>Making sure you code validates is a crucial part of making your website. As outlined by W3C’s <a href=" https://validator.w3.org/docs/why.html" title="Read Why Validate by W3C" >Why Validate </a> document “Validation is a sign of professionalism”. Imagine you are a freelance website developer and your website which helps drive your business doesn’t validate, this may cost you a client in the future.</p>

      <p>If you are sat there wondering “how do I know if my website validates or not” W3C have you covered with there <a href="https://validator.w3.org/ " title="W3C HTML Validation Tool" >HTML Validation Tool.</a> The tool allows you to test via URL, file upload or direct code. The report then simple shows what lines have an error if any.</p>

      <figure>
        <img src="http://matthewwindle.com/dist/images/code-validation.png" alt="HTML code validation using W3C validation tool" >
        <figcaption>HTML code validation using W3C validation tool.</figcaption>
      </figure>

      <h2>Page optimisation</h2>
      <p>Does all you code validate? Great, lets move on to optimising the page.</p>
      <p>If you have read my other blog post <a href="/blog/building-my-portfolio.php" title="read my other blog post building my portfolio">building my portfolio</a> you will know that more and more people are viewing the web on a mobile device. Baring this in mind most users will have a limited data plan, so every time they visit a web page it is costing them to see your content. </p>
      <h3>What can you do to help? </h3><br>

      <p>Well like the code validation tool there is a tool to check how well your website performs in speed and user experience. Google provide the <a href="https://developers.google.com/speed/pagespeed/insights/" >PageSpeed Insights </a>. All you need to do is provide the URL of the website you want to test and you receive a detailed report outlining how the page can be more optimised. </p>
      <figure>
        <img src="http://matthewwindle.com/dist/images/google-speedtest.png" alt="Google PageSpeed Insight results" >
        <figcaption>Google PageSpeed Insight results</figcaption>
      </figure>

      <p>The report gives a rating from 0 to 100 (100 being the best) in speed and user experience. Along side this it gives you tips on how to increase your score such as minifying your code files, compressing your website files and optimising any images. At the end of the report the tool provides a link where you can download the files that will help with page speed such as the optimised images or minified code.</p>



      <h2>SEO integration</h2>
      <p>Lastly, but not the least important is SEO integration, Search Engine Optimisation is key to where you rank on search engines such as Google. </p>
      <p>Why is SEO important, well as mention it can determine where you lie within Google rankings so this could bring you more business if you are in the top search results. As mentioned in a blog post over at <a href="https://www.reliablesoft.net/what-is-search-engine-optimization-and-why-is-it-important/" title="Read the blog post at reliablesoft.net">reliablesoft.net </a> </p>

      <blockquote>
        <p>SEO is not only about search engines but good SEO practices improve the user experience and usability of a web site.</p>
      </blockquote>

      <p>With this being said I can totally agree as SEO includes some of the coding basics which many forget such as adding alt tags to images and titles to links.</p>

      <p>A tool that I have recently been using is <a href="https://www.screamingfrog.co.uk/seo-spider/" title="Visit Screaming Frog SEO Spider Tool" >Screaming Frog SEO</a> checker which can be downloaded for Mac and Windows. The tool checks any website (max of 500 pages for the free version) for missing elements such as alt text and image size.</p>

      <figure>
        <img src="http://matthewwindle.com/dist/images/screamingfrog.png" alt="Screaming Frog SEO Spider Tool " >
        <figcaption>Screaming Frog SEO Spider Tool</figcaption>
      </figure>

    </article>
    <div class="post-sidebar" >
      <div class="sidebar-nav">
        <h3>Recent Posts</h3>
        <a href="">Building my portfolio</a>
        <a href="">The Industry</a>
      </div>
      <h3>About Matthew</h3>
      <p>Matthew Windle is a 27 year old front-end web developer with a passion for all things techie.</p>
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
