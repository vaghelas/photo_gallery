<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Canvas Slideshow Demo</title>
    <meta charset="UTF-8" />
    <meta name="description" content="Canvas Slideshow test" />
    <!--[if lt IE 9]>
      <script type="text/javascript"  src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script type="text/javascript"  src="scripts/excanvas.compiled.js"></script>
    <![endif]-->
    <script type="text/javascript" src="slider/canvasSlideshow/demo/scripts/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="slider/canvasSlideshow/demo/scripts/jquery.lightbox.min.js"></script>
    <script type="text/javascript" src="slider/canvasSlideshow/demo/scripts/jquery.canvasSlideshow.js"></script>
  </head>
  <body>
    <!--<p>To see how we build this come to <a href="http://www.webair.it/blog" target="_new">webair blog</a></p>
    --><div id="canvas_container" style="position:relative; margin:auto; width:800px;height:250px;">
    <canvas id="slideshow" width="800" height="250">
      <img src="slider/canvasSlideshow/demo/images/image1.jpg" alt="description image 1" style="display:none;" />
      <img src="images/image2.jpg" alt="description image 2" style="display:none;" />
      <img src="images/image3.jpg" alt="description image 3" style="display:none;" />
      <img src="images/image4.jpg" alt="description image 4" style="display:none;" />
      <img src="images/image5.jpg" alt="description image 5" style="display:none;" />
      <img src="images/image6.jpg" alt="description image 6" style="display:none;" />
      <img src="images/image7.jpg" alt="description image 7" style="display:none;" />
      <img src="images/image8.jpg" alt="description image 8" style="display:none;" />
    </canvas>
    <script type="text/javascript">
      $('#slideshow').canvasSlideshow({num_elem: 3});
    </script>
    </div>
  </body>
</html>

