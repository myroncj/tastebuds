<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
  <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">TasteBuds</a>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault" style="width:100%;">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Settings</a>
      </li>
      <li class="nav-item" style="float:right;">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item" style="float:right;">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
    <form class="form-inline mt-2 mt-md-0">
      <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search"> -->
      <!-- <button class="btn btn-outline-muted mr-sm-2 my-2 my-sm-0" type="submit">{{ $name }}</button> -->
      <!-- <button class="btn btn-outline-muted my-2 my-sm-0" type="submit"></button> -->
      <div class="btn-group">
        <button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ $name }}
        </button>
        <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" href="/Vfood">Food Items</a>
          <a class="dropdown-item" href="#">Menu Items</a>
          <a class="dropdown-item" href="#">Analytics</a>
          <a class="dropdown-item" href="#">Wallet</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Profile</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/logout">Logout</a>
        </div>
      </div>
    </form>
  </div>
</nav>
