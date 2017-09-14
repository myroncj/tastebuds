<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Vendor Dashboard</title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="/css/boot.min.css" type="text/css"/>

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


  </head>

  <body>
    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
      <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Dashboard</a>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Settings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Help</a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
<!--
        <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">Overview <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Reports</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Analytics</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Export</a>
            </li>
          </ul>

          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link" href="#">Nav item</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Nav item again</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">One more nav</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Another nav item</a>
            </li>
          </ul>

          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link" href="#">Nav item again</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">One more nav</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Another nav item</a>
            </li>
          </ul>
        </nav>
-->

        <main class="offset-md-1 col-md-10 offset-md-1">
          <br/>
          <h1>Dashboard</h1>

          <section class="row text-center placeholders">
            <div class="col-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>Food Items</h4>
              <div class="text-muted">Add, Update or Remove Food Items</div>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>Menu Items</h4>
              <span class="text-muted">Make Items available</span>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>Analytics</h4>
              <span class="text-muted">Reports</span>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>Wallet</h4>
              <span class="text-muted">Cash Flow</span>
            </div>
          </section>

          <h2>Section title</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Vendor</th>
                  <th>Customer</th>
                  <th>Stall</th>
                  <th>Block</th>
                  <th>Food Item</th>
                    <th>Quantity</th>
                    <th>Transaction ID</th>
                    <th>Payment</th>
                    <th>Status</th>
                </tr>
              </thead>
              <tbody>
                   @foreach($orders as $o)
                        <tr>
                          <td>{{ $o->id }}</td>
                          <td>{{ $o->vendor_id }}</td>
                          <td>{{ $o->cust_id }}</td>
                          <td>{{ $o->stall_no }}</td>
                          <td>{{ $o->block_no }}</td>
                          <td>{{ $o->food_item_id }}</td>
                          <td>{{ $o->quantity }}</td>
                          <td>{{ $o->transaction_id }}</td>
                          <td>{{ $o->payment_status }}</td>
                          <td>{{ $o->status_id }}</td>
                        </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"> -->

    <!-- <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script> -->

    <script type="text/javascript" href="/js/jquery.slim.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script> -->



  <!--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> -->

    <script type="text/javascript" href="/js/boot.min.js"></script>

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
