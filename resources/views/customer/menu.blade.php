<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>TasteBuds</title>

    <!-- Bootstrap core CSS -->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
      

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
      
<!--
      <style type="text/css">
      /* GLOBAL STYLES
-------------------------------------------------- */
/* Padding below the footer and lighter body text */

            body {
              padding-top: 3rem;
              padding-bottom: 3rem;
              color: #5a5a5a;
            }


            /* CUSTOMIZE THE CAROUSEL
            -------------------------------------------------- */

            /* Carousel base class */
            .carousel {
              margin-bottom: 4rem;
            }
            /* Since positioning the image, we need to help out the caption */
            .carousel-caption {
              z-index: 10;
              bottom: 3rem;
            }

            /* Declare heights because of positioning of img element */
            .carousel-item {
              height: 32rem;
              background-color: #777;
            }
            .carousel-item > img {
              position: absolute;
              top: 0;
              left: 0;
              min-width: 100%;
              height: 32rem;
            }


            /* MARKETING CONTENT
            -------------------------------------------------- */

            /* Center align the text within the three columns below the carousel */
            .marketing .col-lg-4 {
              margin-bottom: 1.5rem;
              text-align: center;
            }
            .marketing h2 {
              font-weight: normal;
            }
            .marketing .col-lg-4 p {
              margin-right: .75rem;
              margin-left: .75rem;
            }


            /* Featurettes
            ------------------------- */

            .featurette-divider {
              margin: 5rem 0; /* Space out the Bootstrap <hr> more */
            }

            /* Thin out the marketing headings */
            .featurette-heading {
              font-weight: 300;
              line-height: 1;
              letter-spacing: -.05rem;
            }


            /* RESPONSIVE CSS
            -------------------------------------------------- */

            @media (min-width: 40em) {
              /* Bump up size of carousel content */
              .carousel-caption p {
                margin-bottom: 1.25rem;
                font-size: 1.25rem;
                line-height: 1.4;
              }

              .featurette-heading {
                font-size: 50px;
              }
            }

            @media (min-width: 62em) {
              .featurette-heading {
                margin-top: 7rem;
              }
            }

      
      
      </style>
-->
  </head>
  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">TasteBuds</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
         <li class="nav-item">
            <a class="nav-link" href="#">Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Contact</a>
          </li> 
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> 
      </div>
    </nav>
   <div class="container"><br/><br/>
      <h2>Categories</h2>
      <br/>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
          <li data-target="#myCarousel" data-slide-to="5"></li>

          </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

          <div class="carousel-item active">
            <img class="first-slide" src="burgers.jpg" alt="Burgers" style="width:100%;">
              <div class="container">
                <div class="carousel-caption d-none d-md-block text-left">
                  <h3>Burgers</h3>
                  <p>click</p>
                 </div>
            </div>
          </div>

          <div class="carousel-item">
            <img class="second-slide" src="sandwiches.jpg" alt="sandwiches" style="width:100%;">
            <div class="container">
                <div class="carousel-caption ">
                  <h3>Sandwiches</h3>
                  <p>click</p>
                </div>
            </div>
          </div>
        
          <div class="carousel-item">
            <img class="third-slide" src="pizzas.jpeg" alt="pizzas" style="width:100%;">
            <div class="container">
                <div class="carousel-caption ">
                  <h3>Pizza & Flatters</h3>
                  <p>click</p>
                </div>
            </div>
          </div>

          <div class="carousel-item">
            <img class="fourth-slide" src="dosas.jpg" alt="dosas" style="width:100%;">
            <div class="container">
                <div class="carousel-caption">
                  <h3>Dosa</h3>
                  <p>click</p>
                </div>
            </div>
          </div>
            
          <div class="carousel-item">
            <img class="fifth-slide" src="meals.jpg" alt="meals" style="width:100%;">
            <div class="container">
                <div class="carousel-caption">
                  <h3>Meals</h3>
                  <p>click</p>
                </div>
            </div>
          </div>
      
          <div class="carousel-item">
            <img class="sixth-slide" src="snacks.jpg" alt="snacks" style="width:100%;">
            <div class="container">
              <div class="carousel-caption">
                <h3>Snacks</h3>
                <p>click</p>
              </div>
            </div>
          </div>
      
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

  </body>
</html>