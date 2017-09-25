<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

    <title>Vendor Dashboard</title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"> -->

    <!-- <link rel="stylesheet" href="/css/boot.min.css" type="text/css"/> -->

    <!-- Custom styles for this template -->
    <!-- <link href="dashboard.css" rel="stylesheet"> -->
    <style type="text/css">
      /*
       * Base structure
       */

      /* Move down content because we have a fixed navbar that is 50px tall */
      body {
        padding-top: 50px;
      }

      /*
       * Typography
       */

      h1 {
        margin-bottom: 20px;
        padding-bottom: 9px;
        border-bottom: 1px solid #eee;
      }

      /*
       * Sidebar
       */

      .sidebar {
        position: fixed;
        top: 51px;
        bottom: 0;
        left: 0;
        z-index: 1000;
        padding: 20px;
        overflow-x: hidden;
        overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
        border-right: 1px solid #eee;
      }

      /* Sidebar navigation */
      .sidebar {
        padding-left: 0;
        padding-right: 0;
      }

      .sidebar .nav {
        margin-bottom: 20px;
      }

      .sidebar .nav-item {
        width: 100%;
      }

      .sidebar .nav-item + .nav-item {
        margin-left: 0;
      }

      .sidebar .nav-link {
        border-radius: 0;
      }

      /*
       * Dashboard
       */

       /* Placeholders */
      .placeholders {
        padding-bottom: 3rem;
      }

      .placeholder img {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
      }
    </style>

  <script>

    $(window).load(function(){

      $('#exampleModalLong').modal('show');

    });

  </script>


  </head>

  <body>

    @include('layouts.ven_nav')

    <div class="container-fluid">
      <div class="well">
      <div class="row">
        <main class="offset-md-1 col-md-10 offset-md-1">
          <br/>
          <h1>Dashboard</h1>

          @if($flash = session('message'))

          <!-- Greeting upon first Login -->
            <div class="modal fade" id="firstWelcome" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="flase">
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

          @if($flash = session('message'))

          <!-- Greeting upon first Login -->
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="flase">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Notification</h5>
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
          $('#firstWelcome').modal('show');
          </script>

          <section class="row text-center placeholders">
            <div class="col-6 col-sm-3 placeholder">
                <img src="add.png" href="/Vfood" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>Food Items</h4>
              <div class="text-muted">Add, Update or Remove Food Items</div>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <img src="menu.jpg" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>Menu Items</h4>
              <span class="text-muted">Make Items available</span>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <img src="graph.jpg" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>Analytics</h4>
              <span class="text-muted">Reports</span>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <img src="wallet1.png" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>Wallet</h4>
              <span class="text-muted">Cash Flow</span>
            </div>
          </section>

          <h2>Current Orders:</h2><br/>

            <table class="table table-striped" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="table-responsive">

                <tr>
                  <th>Order No</th>
                  <th>Customer Name</th>
                  <th>Transaction</th>
                  <th>Order Status</th>
                </tr>

              <!-- <div id="accordion" role="tablist" aria-multiselectable="true"> -->

                   @foreach($orders as $ord)
                   <tr>
                      <h4>
                          <td>Order #{{ $ord->id }}</td>
                          <!-- <td>{{ $ord->vendor->name }}</td> -->
                          <td>{{ $ord->customer->cust_name }}</td>
                          <td>{{ $ord->transaction->id }}</td>
                          <td>{{ $ord->status->name }}</td>

                      </h4>
                    </div>
                        <!-- <div class="table-responsive"> -->
                        <!-- <table class="table table-striped"> -->
                        <div class="container">
                          <tr>
                              <!-- <div class="row"> -->
                                <td colspan="4">
                                  <div class="row">
                                    <div class="col-md-1"><center></center></div>
                                    <div class="col-md-3"><center><b>Item ID</b></center></div>
                                    <div class="col-md-4"><center><b>Item Name</b></center></div>
                                    <div class="col-md-3"><center><b>Item Price</b></center></div>
                                  </div>
                                <td>
                              <!-- </div> -->
                          </tr>
                        </div>

                          @foreach($ord->order_item as $o)
                          <tr>
                            <td></td>
                            <td>{{ $o->food_item->id }}</td>
                            <td>{{ $o->food_item->name }}</td>
                            <td>{{ $o->food_item->price }}</td>
                          </tr>
                          @endforeach
                        <!-- </table> -->
                      </div>
                    </div>
                  </div>

                  @endforeach
                <!-- </div> -->
                </div>
            </table>
        </div>
      </main>
    </div>
  </div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"> -->

    <!-- <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script> -->

    <!-- <script type="text/javascript" href="/js/jquery.slim.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script> -->



  <!--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> -->

    <!-- <script type="text/javascript" href="/js/boot.min.js"></script> -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/javascript">
    /*
     * IE10 viewport hack for Surface/desktop Windows 8 bug
     * Copyright 2014-2017 The Bootstrap Authors
     * Copyright 2014-2017 Twitter, Inc.
     * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
     */

    // See the Getting Started docs for more information:
    // https://getbootstrap.com/getting-started/#support-ie10-width

    (function () {
      'use strict'

      if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
        var msViewportStyle = document.createElement('style')
        msViewportStyle.appendChild(
          document.createTextNode(
            '@-ms-viewport{width:auto!important}'
          )
        )
        document.head.appendChild(msViewportStyle)
      }

    }())
    </script>
  </body>
</html>
