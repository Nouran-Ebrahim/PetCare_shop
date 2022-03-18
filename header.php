<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
     <title>pet lovers</title>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="preconnect" href="https://fonts.gstatic.com"> 
     <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Turret+Road:wght@800&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="css/styleee.css">
     
    </head>
    <body>
 <!-- nav bar -->
 <div id="header">
  <div id="logo">
     <div id="hand_logo"> <img src="images/templatemo_logo.png"></div>
      <div id="head-text">
          PETS L<i class="fa fa-heart" style="color:#ffe5ae ; display: inline-block;" ></i> VERS
          <!--  -->
      </div>
  </div>
  <div id="nav_home">
  <nav >
  <div class="nav-bar"><a class="btn btn-secondary " href="index.php">Home</a></div>
  <div class="dropdown nav-bar">
      <a class="btn btn-secondary dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Services
      </a>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item abc5 " href="petsserv.php" >Pets</a>
        <a class="dropdown-item abc5" href="food serv.html" id="a6">Food</a>
        <a class="dropdown-item abc5" href="accessories serv.html">Accessories</a>
      </div>
    </div>
  <div class="nav-bar"><a class="btn btn-secondary " href="logfirst.php" >Stories</a></div>
  <div class="nav-bar"><a class="btn btn-secondary"  href="petcare.php">Pet care</a></div>
  <div class="nav-bar"><a class="btn btn-secondary " href="log in.php">Log in</a></div>
</nav>
</div>
<nav class="navbar navbar-light pos" id="search_se">
<a href="#" class="abc3" ><i class="fa fa-shopping-cart" ></i> </a> 
  <form class="form-inline ">
    <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0  color " type="submit">Search</button>
  </form>
</nav>
<div id="hello">
<?php
      if( isset($_SESSION["user"]) ){
        echo "<div> " . $_SESSION["user"]."</div>";
        echo "<button><a href=\"logout.php\">logout</a></button>";
      }
?>
</div>
</div>    