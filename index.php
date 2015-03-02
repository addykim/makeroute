<?php
    if(isset($_POST['LocationA'])) $LocationA = $_POST['LocationA'];
    else $LocationA = null;
    if(isset($_POST['LocationB'])) $LocationB = $_POST['LocationB'];
    else $LocationB = null;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Make Route: Find What's Good on the Way</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 

    <!-- Custom styles for this template -->
    <link href="css/bootstrapTempSuperHero.css" rel="stylesheet"> 
    <!-- Load the Google Maps Places API -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
    <script src="/js/autocomplete.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    <body onload="initialize()">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <a class="navbar-brand" href="#">MakeRoute</a>
    </div>

    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" aria-expanded="false" style="height: 1px;">
        <ul class="nav navbar-right">
            <li class="dropdown"></li>
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mode of Travel<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu" id="dropDownChoice">
            <li><a href="#" >Driving</a></li>
            <li><a href="#">Walking</a></li>
            <li><a href="#">Biking</a></li>
            <li><a href="#">Transit</a></li>
          </ul>
                <script>
                    function chooseTravel() {
                        var travel = document.getElementById(dropDownChoice);
                        //Get value of the input field with id=
                        if (travel == 1) {
                            //Driving
                            window.alert("Driving");
                        } else if (travel == 2) {
                            //Walking
                            window.alert("Walking");
                        } else if (travel == 3) {
                            //Transit
                            window.alert("Transit");
                        } else {
                            //Should not happen, not chosen
                            //Do nothing
                            //document.getElementById(travel).innerHTML = T
                        }
                </script>
                <button type="submit" class="btn btn-default">Search</button>
                <!-- on click="document.getElementById("demo").innerHTML = "Change text"> a tag the id="attribute"> -->
            </form>
        </ul>
    </div>
  </div>
</nav>
        <marquee> <?php echo "$LocationA $LocationB"?> </marquee>
    <!-- <div class="jumbotron"> -->
      <!--<div class="container"> -->
          <iframe src="/html/sampleMap.html" style="height: 90%; width: 100%" scrolling="no"></iframe>
          
          <!--<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>-->
      <!-- </div> -->
    <!-- </div> -->

    <div class="container">
      
      <form class="navbar-form navbar-right" role="search" action="index.php" method="post">
                <div class="form-group">
                    <input type="text" name="LocationA" class="form-control" placeholder="Location A" id="locationa">
                    <!--Put some sort of divider here?-->
                    <input type="text" name="LocationB" class="form-control" placeholder="Location B" id="locationb">
                </div>

      <hr>

      <footer>
          <p>Make Route is a travel assistant aimed to give you the best roadtrips, made by the best HackDFW attendees ever.<br>
              Want to see our code? Check out our Github <a href="http://github.com/rainiera/makeroute/">here</a>.</p>
        <p>&copy; Rainier Abaobao, Nick Ginther, Addy Kim, Kieran Vanderslice 2015</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
<!-- view-source:http://getbootstrap.com/examples/jumbotron/ Good reference link -->