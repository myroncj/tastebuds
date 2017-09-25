<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

   <!-- Bootstrap core CSS -->
   <!-- Latest compiled and minified CSS -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet">
  </head>

  <body>

    @include('layouts.ven_nav')

    <div class="container">

      <form method="POST" class="form-signin" action="/Vfood/add">

        {{ csrf_field() }}

        <br/><br/>

        <h2 class="form-signin-heading">Add Food Item</h2>

        <br/>
        <input name="name" type="text" id="inputName" class="form-control" placeholder="Food Item Name" autofocus><br/>

        <select name="cat" class="form-control" id="type1">
          @foreach($food_cat as $fct)
          <option value="{{ $fct->id }}">{{ $fct->name }}</option>
          @endforeach
        </select>

        <br/>

        <select name="type" class="form-control" id="type1">
          @foreach($food_type as $fty)
          <option value="{{ $fty->id }}">{{ $fty->type }}</option>
          @endforeach
        </select>

        <br/>

        <input name="quantity" type="text" id="inputClass" class="form-control" placeholder="Quantity" ><br/>

        <input name="price" type="text" id="inputClass" class="form-control" placeholder="Price"> <br/>

        <input name="availability" type="text" id="inputClass" class="form-control" placeholder="Availability"><br/>

        <!-- <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Confirm Password" required> -->
<!--        <div class="checkbox">

            <input type="checkbox" value="Admin"> Admin

        </div>
-->
        @include('layouts.errors')
        <br/>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Add Item</button>

      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
