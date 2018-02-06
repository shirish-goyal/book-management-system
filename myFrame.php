<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
  </style>
</head>
<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">é-Library</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Discover<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="https://www.google.com">Novels</a></li>
              <li><a href="https://www.google.com">Journels</a></li>
              <li><a href="https://www.google.com">Spiritual</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Geners<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#" target="_blank">Fiction</a></li>
              <li><a href="#" target="_blank">Historical fiction</a></li>
              <li><a href="#" target="_blank">Romance</a></li>
              <li><a href="#" target="_blank">Speculative fiction</a></li>
              <li><a href="#" target="_blank">Trajedy</a></li>
              <li><a href="#" target="_blank">Thriller</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Authors<span class="caret"></span></a>
            <ul class="dropdown-menu">
             <li><a href="#" target="_blank">Alexandre Dumas</a></li>
             <li><a href="#" target="_blank">Arturo Pérez-Reverte</a></li>
             <li><a href="#" target="_blank">Charles Dickens</a></li>
             <li><a href="#" target="_blank">Charlotte Brontë</a></li>
              <li><a href="#" target="_blank">George Eliot</a></li>
              <li><a href="#" target="_blank">Pere</a></li>
              <li><a href="#" target="_blank">William Shakespeare</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Hello User</a></li>
          <li><a href="login.php" target="_parent"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>


<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators" style="bgcolor:black;">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="https://booksetownsnet.000webhostapp.com/authors/1.jpg" alt="author" style="width:950px; height:300px">
      </div>

      <div class="item">
        <img src="https://booksetownsnet.000webhostapp.com/authors/2.jpg" alt="author" style="width:950px; height:300px">
      </div>

      <div class="item">
        <img src="https://booksetownsnet.000webhostapp.com/authors/3.jpg" alt="author" style="width:950px; height:300px">
      </div>

      <div class="item">
        <img src="https://booksetownsnet.000webhostapp.com/authors/4.jpg" alt="author" style="width:950px; height:300px">
      </div>

      <div class="item">
        <img src="https://booksetownsnet.000webhostapp.com/authors/5.jpg" alt="author" style="width:950px; height:300px">
      </div>

      <div class="item">
        <img src="https://booksetownsnet.000webhostapp.com/authors/6.jpg" alt="author" style="width:950px; height:300px">
      </div>

      <div class="item">
        <img src="https://booksetownsnet.000webhostapp.com/authors/7.jpg" alt="author" style="width:950px; height:300px">
      </div>
    </div>
<!--
     Left and right controls-->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>
