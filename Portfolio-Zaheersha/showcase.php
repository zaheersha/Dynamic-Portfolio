<!doctype html>
<html lang="en" class="h-100">




<!-- IE 11 polyfill for CSS and Custom Properties -->
<script
  nomodule>window.MSInputMethodContext && document.documentMode && document.write('<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-ie11@5/css/bootstrap-ie11.min.css"><script src="https://cdn.jsdelivr.net/npm/ie11-custom-properties@4/ie11CustomProperties.min.js"><\/script>');</script>

<link rel="stylesheet" href="dark-mode.css">

</head>

<head>
  <script
    nomodule="">window.MSInputMethodContext && document.documentMode && document.write('<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-ie11@5/css/bootstrap-ie11.min.css"><script src="https://cdn.jsdelivr.net/npm/ie11-custom-properties@4/ie11CustomProperties.min.js"><\/script>');</script>

  <link rel="stylesheet" href="dark-mode.css">
  <link rel="icon" type="image/x-icon" href="https://cdn0.iconfinder.com/data/icons/ie_Financial_set/256/48.png">





  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/css/bootstrap.min.css">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="portfolio.css">

  <title>Zaheer sha</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>

</head>

<body data-theme="dark">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  
  <main role="main">

    <div class="container-responsive">



      <!-- Home Page -->

      <div id="home">

        <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
          body {
            margin: 0;
          }

          .topnav {
            overflow: hidden;
            background-color: #333;

          }

          .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
          }

          .topnav a:hover {
            color: white;
            transition: 0.3s;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.2), 0 0 0 0 rgba(0, 0, 0, 0.19);
          }

          .topnav a:hover:hover {
            box-shadow: 0 8px 16px 0 rgba(255, 255, 255, 0.4), 0 12px 40px 0 rgba(0, 0, 0, 0.3);
          }

          .topnav a.active {
            background-color: #04AA6D;
            color: white;
            font-size: 27px;
          }

          .topnav .icon {
            display: none;
          }

          @media screen and (max-width: 600px) {
            .topnav a:not(:first-child) {
              display: none;
            }

            .topnav a.icon {
              float: right;
              display: block;
            }
          }

          @media screen and (max-width: 600px) {
            .topnav.responsive {
              position: relative;
            }

            .topnav.responsive .icon {
              position: absolute;
              right: 0;
              top: 0;
            }

            .topnav.responsive a {
              float: none;
              display: block;
              text-align: left;
            }
          }
        </style>



        <div class="topnav" id="myTopnav">
          <a href="#" class="active">AZS</a>
          <a href="index.php#home">Home</a>
          <a href="index.php#about">About</a>
          <a href="index.php#academics">Academics</a>
          <a href="index.php#skills">Skills</a>
          <a href="#certification">Certifications</a>
          <a href="#experience">Experiences</a>
          <a href="#projects">Projects</a>
          <a href="index.php#testmonials">Testmonials</a>
          <a href="#activities">Activities</a>

          <a href="#social">Contact</a>
          <a href="signin.html">Sign-in</a>

          <a>
            <div class="nav-link">

              <div class="form-check form-switch">

                <input type="checkbox" class="form-check-input" id="darkSwitch">
                <label class="custom-control-label" for="darkSwitch">Dark Mode</label>
              </div>
              <script src="dark-mode-switch.min.js"></script>

            </div>
          </a>

          <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
        </div>


        <script>
          function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
              x.className += " responsive";
            } else {
              x.className = "topnav";
            }
          }
        </script>




<!-- Experience reterviewing  -->

<?php
include "conn.php";

$c = "SELECT * FROM e";
$z = mysqli_query($conn, $c);

$rows = mysqli_fetch_all($z, MYSQLI_ASSOC);
?>
<div id="experience">
  <div class="container mt-3 pb-5">
    <div class="post-heading text-center">
      <br>
      <h3 class="display-4 font-weight-bold">Experiences</h3>
      <hr class="w-25 mx-auto pb-1">
    </div>
    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <?php foreach ($rows as $row) : ?>
            <div class="col"
              style="transition: 0.3s; box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.2), 0 0 0 0 rgba(0, 0, 0, 0.19);"
              onmouseout="this.style.boxShadow='0 0 0 0 rgba(0, 0, 0, 0.2), 0 0 0 0 rgba(0, 0, 0, 0.19)';"
              onmouseover="this.style.boxShadow='0 8px 16px 0 rgba(255, 255, 255, 0.4), 0 12px 40px 0 rgba(0, 0, 0, 0.3)';">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="<?php echo $row['img']; ?>" width="100%" height="225"
                  xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                  preserveaspectratio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#55595c"></rect>
                <div class="card-body">
                <h3 class="text-black" color="balck" style="text-align: justify;"><?php echo $row['ti']; ?></h3>

                  <p class="text-black" color="balck" style="text-align: justify;"  ><?php echo $row['con']; ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><a
                          href="<?php echo $row['img']; ?>">View </a></button>
                    </div>
                    <small class="text-muted"><?php echo $row['ti']; ?></small>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>













<!-- Certificates reterviewing  -->


<?php
include "conn.php";

$c = "SELECT * FROM c";
$l = mysqli_query($conn, $c);

$rows = mysqli_fetch_all($l, MYSQLI_ASSOC);
?>
  <div id="certification">
  <div class="container mt-3 pb-5">
    <div class="post-heading text-center">
      <br>
      <h3 class="display-4 font-weight-bold">Certificates</h3>
      <hr class="w-25 mx-auto pb-1">
    </div>
    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <?php foreach ($rows as $row) : ?>
            <div class="col"
              style="transition: 0.3s; box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.2), 0 0 0 0 rgba(0, 0, 0, 0.19);"
              onmouseout="this.style.boxShadow='0 0 0 0 rgba(0, 0, 0, 0.2), 0 0 0 0 rgba(0, 0, 0, 0.19)';"
              onmouseover="this.style.boxShadow='0 8px 16px 0 rgba(255, 255, 255, 0.4), 0 12px 40px 0 rgba(0, 0, 0, 0.3)';">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="<?php echo $row['img']; ?>" width="100%" height="225"
                  xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                  preserveaspectratio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#55595c"></rect>
                <div class="card-body">
                <h3 class="text-black" color="balck" style="text-align: justify;"><?php echo $row['ti']; ?></h3>

                  <p class="text-black" color="balck" style="text-align: justify;" ><?php echo $row['con']; ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><a
                          href="<?php echo $row['img']; ?>">View </a></button>
                    </div>
                    <small class="text-muted"><?php echo $row['ti']; ?></small>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>

















 <!-- Projects reterviewing  -->

<?php
include "conn.php";

$c = "SELECT * FROM p";
$z = mysqli_query($conn, $c);

$rows = mysqli_fetch_all($z, MYSQLI_ASSOC);
?>

<div id="projects">
  <div class="container mt-3 pb-5">
    <div class="post-heading text-center">
      <br>
      <h3 class="display-4 font-weight-bold">Projects</h3>
      <hr class="w-25 mx-auto pb-1">
    </div>
    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <?php foreach ($rows as $row) : ?>
            <div class="col"
              style="transition: 0.3s; box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.2), 0 0 0 0 rgba(0, 0, 0, 0.19);"
              onmouseout="this.style.boxShadow='0 0 0 0 rgba(0, 0, 0, 0.2), 0 0 0 0 rgba(0, 0, 0, 0.19)';"
              onmouseover="this.style.boxShadow='0 8px 16px 0 rgba(255, 255, 255, 0.4), 0 12px 40px 0 rgba(0, 0, 0, 0.3)';">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="<?php echo $row['img']; ?>" width="100%" height="225"
                  xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                  preserveaspectratio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#55595c"></rect>
                <div class="card-body">
                <h3 class="text-black" color="balck" style="text-align: justify;"><?php echo $row['ti']; ?></h3>

                  <p class="text-black" color="balck" style="text-align: justify;" ><?php echo $row['con']; ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <a href="<?php echo $row['img']; ?>">View </a>
                      </button>
                      &nbsp;&nbsp;
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <a href="<?php echo $row['src']; ?>">Source Code</a>
                      </button>
                    </div>
                    <small class="text-muted"><?php echo $row['ti']; ?></small>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- Activities reterviewing  -->

<?php
include "conn.php";

$c = "SELECT * FROM a";
$z = mysqli_query($conn, $c);

$rows = mysqli_fetch_all($z, MYSQLI_ASSOC);
?>
<div id="activities">
  <div class="container mt-3 pb-5">
    <div class="post-heading text-center">
      <br>
      <h3 class="display-4 font-weight-bold">Activities</h3>
      <hr class="w-25 mx-auto pb-1">
    </div>
    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <?php foreach ($rows as $row) : ?>
            <div class="col"
              style="transition: 0.3s; box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.2), 0 0 0 0 rgba(0, 0, 0, 0.19);"
              onmouseout="this.style.boxShadow='0 0 0 0 rgba(0, 0, 0, 0.2), 0 0 0 0 rgba(0, 0, 0, 0.19)';"
              onmouseover="this.style.boxShadow='0 8px 16px 0 rgba(255, 255, 255, 0.4), 0 12px 40px 0 rgba(0, 0, 0, 0.3)';">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="<?php echo $row['img']; ?>" width="100%" height="225"
                  xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                  preserveaspectratio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#55595c"></rect>
                <div class="card-body">
                <h3 class="text-black" color="balck" style="text-align: justify;"><?php echo $row['ti']; ?></h3>

                  <p class="text-black" color="balck" style="text-align: justify;" ><?php echo $row['con']; ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><a
                          href="<?php echo $row['img']; ?>">View </a></button>
                    </div>
                    <small class="text-muted"><?php echo $row['ti']; ?></small>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>




      <!-- Footer -->

      <footer id="social" class="bg-transparent text-center text-black bg-back">

        <div class="w-50 mx-auto mt-5 pb-5">

          <div class="post-heading text-center ">
            <br><br>
            <h3 class="display-4 font-weight-bold">Check Out My Socials...</h3>
            <hr class="w-25 mx-auto pb-1">

          </div>

          <div class="p-4 pb-0">

            <section class="mb-4">

              <a href="https://www.linkedin.com/in/akula-zaheer-sha-0899471a1/" role="button">
                <img src="images/linkedin-icon.png" alt="" height="60" width="60">
              </a>
              <a class="btn text-white btn-floating m-1" href="" role="button">
                <img src="images/instagram-icon.png" alt="" height="60" width="60">
              </a>


              <a class="btn text-white btn-floating m-1" href="" role="button">
                <img src="images/facebook-icon.png" alt="" height="60" width="60">
              </a>
              <a class="btn text-white btn-floating m-1" href="https://twitter.com/AZaheerSha1" role="button">
                <img src="images/twitter-icon.png" alt="" height="60" width="60">
              </a>
              <a class="btn text-white btn-floating m-1" href="https://wa.me/9494333702" role="button">
                <img src="images/whatsapp-icon.png" alt="" height="60" width="60">
              </a>
              <a class="btn text-white btn-floating m-1" href="https://github.com/zaheersha" role="button">
                <img src="images/github.png" alt="" height="90" width="90">
              </a>
              <style>
                .gif-container {
                  max-width: 100%;
                  height: auto;
                  display: flex;
                  justify-content: center;
                  align-items: center;
                }

                .gif-container img {
                  max-width: 100%;
                  height: auto;
                }
              </style>
              <div class="gif-container">
                <img src="images/azs.gif">
              </div>
            </section>



          </div>

        </div>

      </footer>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>







      <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">





      <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

      <!-- Favicons -->
      <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
      <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
      <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
      <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
      <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
      <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
      <meta name="theme-color" content="#712cf9">


      <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }

        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }

        .b-example-divider {
          height: 3rem;
          background-color: rgba(0, 0, 0, .1);
          border: solid rgba(0, 0, 0, .15);
          border-width: 1px 0;
          box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
          flex-shrink: 0;
          width: 1.5rem;
          height: 100vh;
        }

        .bi {
          vertical-align: -.125em;
          fill: currentColor;
        }
      </style>



      <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    </div>
    <!--  Page up/down -->

    <style>
      #myBtnTop,
      #myBtnBottom {
        display: none;
        position: fixed;
        bottom: 20px;
        font-size: 18px;
        border: none;
        outline: none;
        padding: 15px;
        border-radius: 4px;
      }

      #myBtnTop {
        right: 30px;
      }

      #myBtnBottom {
        left: 30px;
      }

      #myBtnTop:hover,
      #myBtnBottom:hover {
        background-color: #555;
      }
    </style>
    <button onclick="topFunction()" id="myBtnTop" class="btn btn-dark btn-lg mr-2 " title="Go to top"><img
        src="images/up.jpeg" width="40" height="40"></button>
    <button onclick="bottomFunction()" id="myBtnBottom" class="btn btn-dark btn-lg mr-2  " title="Go to bottom"><img
        src="images/down.jpeg" width="40" height="40"></button>

    <script>
      // Get the buttons
      let mybuttonTop = document.getElementById("myBtnTop");
      let mybuttonBottom = document.getElementById("myBtnBottom");

      // When the user scrolls down 20px from the top of the document, show the "scroll to top" button
      window.onscroll = function () { scrollFunction() };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybuttonTop.style.display = "block";
        } else {
          mybuttonTop.style.display = "none";
        }

        // When the user scrolls up 20px from the bottom of the document, show the "scroll to bottom" button
        if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight - 20) {
          mybuttonBottom.style.display = "none";
        } else {
          mybuttonBottom.style.display = "block";
        }
      }

      // When the user clicks on the "scroll to top" button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }

      // When the user clicks on the "scroll to bottom" button, scroll to the bottom of the document
      function bottomFunction() {
        window.scrollTo(0, document.body.scrollHeight);
      }
    </script>




    <div style="text-align: center;">
      <div style="position:relative; top:0; margin-right:auto;margin-left:auto; z-index:99999">

      </div>
    </div>


  </main>
   
</body>
</div>


</html>