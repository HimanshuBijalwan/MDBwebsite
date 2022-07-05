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
<div class="carousel"  data-flickity='{ "lazyLoad": true }' style="background-color:orangered">
  <div class="carousel-cell">
    <img class="carousel-cell-image "
      data-flickity-lazyload="img/2.jpg" alt="wolf" />
  </div>
  <div class="carousel-cell">
    <img class="carousel-cell-image img-fluid"
      data-flickity-lazyload="img/1.jpg" alt="wolf" />
  </div>
</div>
<br><br>
<div style="background: orangered; color: white;">
<h1 style="text-align: center;">Poranik Devbhoomi Society - Welcomes You</h1>
<p style="text-align: center;">Address - Parteet Nagar, Raiwala, Rishikesh, Dehradun</p>
</div>
<div class="container" style="margin-top: 30px;margin-bottom: 10px;">
  <div class="row justify-content-center">

    <div class="col-lg-4 col-md-12">
     <img src="img/img-box.jpeg" class="img-fluid img-hover">
    </div>

    <div class="col-lg-4 col-md-6">
      <img src="img/img-box.jpeg" class="img-fluid img-hover">
    </div>

    <div class="col-lg-4 col-md-6">
        <img src="img/img-box.jpeg" class="img-fluid img-hover">
    </div>

  </div>
</div>

<div class="container" style="margin-top: 30px;margin-bottom: 10px;">
  <div class="row justify-content-center">

    <div class="col-lg-4 col-md-12">
     <img src="img/img-box.jpeg" class="img-fluid img-hover">
    </div>

    <div class="col-lg-4 col-md-6">
      <img src="img/img-box.jpeg" class="img-fluid img-hover">
    </div>

    <div class="col-lg-4 col-md-6">
        <img src="img/img-box.jpeg" class="img-fluid img-hover">
    </div>

  </div>
</div>


<div class="container-fluid" style="background: #EEEDEB;">
  <div class="row ">
   <div class="col-12">
         <img src="img/donate.jpg" class="img-fluid">
<center>
<div style="margin-top: -20px;">
<button type="button" class="btn btn-warning btn-rounded btn-lg">Contact Us</button>

<button type="button" class="btn btn-warning btn-rounded btn-lg">Donate Now</button></center>
<br><br>
    </div>
    </div>

  </div>

<br>
<div class="container">
  <div class="row ">

    <div class="col-12">
          <h1 align="center">Welcome To Poranik Devbhoomi Society</h1>
          <br><br>
          <p>
Pauranik Dev Bhoomi Society is a non-profit organisation, established in 2005 that works primarily in the domain of Gender, Employment, Education and Art & Culture. Its primary office is in Dehradun, Uttarakhand.
          </p>
          <p>Pauranik Devbhoomi Society {Registry} The institution is working continuously since 2005 in the social, cultural, spiritual, field. The organization's office is located in the city of Dandi Raiwala Dehradun.</p>
          <p>The objective of the institution is to preserve the disappearing culture, language and food, education, religion and culture, cultural fairs and Shrimad Bhagwat story, Devi Bhagwat story, Shiv Mahapuran, Yagya, ritual, Kirtan Bhajan, Peace, harmony, love, brotherhood in the society, through propagation of 'extinct Uttarakhandi cuisine' which works as Ayurvedic medicine. To make available</p>
    </div>

  </div>
</div>
<hr>

<h2 align="center">Poranik Devbhoomi - Event and Program</h2>


<div class="container" style="margin-top: 20px;">
  <div class="row">
    <div class="col-lg-4 col-md-12">
     <div class="card text-center " style="background-color:#ffffff;">
  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
    <img src="img/event/3.jpg" class="img-fluid" />
    <a href="#!">
      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
    </a>
  </div>

  <div class="card-body">
    <h5 class="card-title">Holi Milan Samaroh</h5>
    <button type="button" class="btn btn-primary">Read More</button>
  </div>
</div>
    </div>

    <div class="col-lg-4 col-md-6">
      <div class="card text-center " style="background-color:#ffffff;">
  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
    <img src="img/event/2.jpg" class="img-fluid" />
    <a href="#!">
      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
    </a>
  </div>

  <div class="card-body">
    <h5 class="card-title">Fair in Raiwala</h5>
    <button type="button" class="btn btn-primary">Read More</button>
  </div>
</div>
    </div>

    <div class="col-lg-4 col-md-6">
      <div class="card text-center " style="background-color:#ffffff;">
  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
    <img src="img/event/1.jpg" class="img-fluid" />
    <a href="#!">
      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
    </a>
  </div>

  <div class="card-body">
    <h5 class="card-title">Tree Plantation</h5>
    <button type="button" class="btn btn-primary">Read More</button>
  </div>
</div>
    </div>
  </div>
</div>
</center>
</div>
</div>
</div>
<br><br>



<?php include 'footer.php';?>

        <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
   <!-- JavaScript -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  </body>
</html>
