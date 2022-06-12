<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Mobile Friendly + SEO Friendly HTML Template</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
     <!-- Style.CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- CSS -->
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

  </head>
  <style type="text/css">
 /* external css: flickity.css */

.carousel {
  background: #FAFAFA;
}

.carousel-cell {
  width: 100%;
  height: 450px;
  background: #333;

  object-fit: cover;
}

.carousel-cell-image {
  max-height: 100%;
  margin: 0 auto;
  max-width: 100%;
    width: inherit !important;
    height: inherit !important;
  opacity: 0;
  -webkit-transition: opacity 0.4s;
          transition: opacity 0.4s;
}

/* fade in lazy loaded image */
.carousel-cell-image.flickity-lazyloaded,
.carousel-cell-image.flickity-lazyerror {
  opacity: 1;
}


  </style>
  <body>
<?php include 'header.php';?>
<!-- Flickity HTML init -->
<div class="carousel"  data-flickity='{ "lazyLoad": true }'>
  <div class="carousel-cell">
    <img class="carousel-cell-image "
      data-flickity-lazyload="img/2.jpg" alt="wolf" />
  </div>
  <div class="carousel-cell">
    <img class="carousel-cell-image img-fluid"
      data-flickity-lazyload="img/1.jpg" alt="wolf" />
  </div>
</div>

<?php include 'footer.php';?>

        <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
   <!-- JavaScript -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  </body>
</html>
