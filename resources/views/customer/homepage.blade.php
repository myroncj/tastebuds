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
            <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>

    @include('layouts.cust_nav')

    @if($flash = session('message'))

    <!-- Greeting upon first Login -->
      <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="flase">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Welcome {{ $name }}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              {{$flash}}
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

    @endif

    <script type="text/javascript">
    $('#exampleModalLong').modal('show');
    </script>

<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <!--<li data-target="#myCarousel" data-slide-to="2"></li>-->
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="first-slide" src="chcarousel.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block text-left text-shadow">
              <h1>Trending.</h1>
              <p>To know all the trending dishes around the campus.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Trending</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="second-slide" src="chcarousel1.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block text-left text-shadow">
              <h1>Offers</h1>
              <p>Here are some yummilicious dishes available in campus that you might like.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse.</a></p>
            </div>
          </div>
        </div>
       <!-- <div class="carousel-item">
          <img class="third-slide" src="carousel2.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block text-right">
              <h1>This is just an additional slide.</h1>
              <p>In which we will just type something to show that it is not that important but it is. #flippingit?</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Fake button</a></p>
            </div>
          </div>
        </div>
      </div>-->
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="rounded-circle" src="chbutton.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Todays's Menu</h2>
          <p>Not just a routine display of items. Everyday is an adventure! Try something new ;)</p>
          <p><a class="btn btn-secondary" href="/Cmenu" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" src="chbutton1.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Specials</h2>
          <p>Check out the specials around you. Special offers make it, bumper special.</p>
          <p><a class="btn btn-secondary" href="#" role="button">Getting excited! &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" src="chbutton2.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Recommended.</h2>
          <p>According to your tatse we have some dishes lined up for you. <a href="#">Click.</a></p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
      </div>
      </body>
</html>
