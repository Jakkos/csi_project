<!DOCTYPE html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Appartt</title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/mine.css" rel="stylesheet">


</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div>
        <a class="navbar-brand" href="#">Appartout'Atis</a>
        <ul class="nav navbar-nav" id="access">
          <li>
            <a href="#">Meublés</a>
          </li>
          <li>
            <a href="#">A l'année</a>
          </li>
          <li>
            <a href="#">Vacances</a>
          </li>
        </ul>
        <ul class="nav navbar-nav" id="identification">
          <li>
            <button class= "btn btn-default navbar-btn" data-toggle="modal" data-target="#mod-con">Connexion</button>
          </li>
          <li>
            <button class= "btn btn-default navbar-btn" data-toggle="modal" data-target="#mod-ins">Inscription</button>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->

    </div>
    <!-- /.container -->
  </nav>

  <div id="mod-con" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Connectez vous ! </h4>
        </div>
        <div class="modal-body">
          <form method="post" action='' name="login_form">
            <p><input type="text" class="span3" name="eid" id="email" placeholder="Email"></p>
            <p><input type="password" class="span3" name="passwd" placeholder="Password"></p>
            <p><button type="submit" class="btn btn-primary">Sign in</button>
              <a href="#">Forgot Password?</a>
            </p>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

   <div id="mod-ins" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Inscrivez vous ! </h4>
        </div>
        <div class="modal-body">
          <form method="post" action='' name="login_form">
            <p><input type="text" class="span3" name="eid" id="email" placeholder="Email"></p>
            <p><input type="password" class="span3" name="passwd" placeholder="Password"></p>
            <p><button type="submit" class="btn btn-primary">Sign in</button>
              <a href="#">Forgot Password?</a>
            </p>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>



  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron hero-spacer">
      <h1>A Warm Welcome!</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
      <p><a class="btn btn-primary btn-large">Call to action!</a>
      </p>
    </header>

    <hr>

    <!-- Title -->
    <div class="row">
      <div class="col-lg-12">
        <h3>Latest Features</h3>
      </div>
    </div>
    <!-- /.row -->

    <!-- Page Features -->
    <div class="row text-center">

      <div class="col-md-3 col-sm-6 hero-feature">
        <div class="thumbnail">
          <img src="http://placehold.it/800x500" alt="">
          <div class="caption">
            <h3>Feature Label</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <p>
              <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 hero-feature">
        <div class="thumbnail">
          <img src="http://placehold.it/800x500" alt="">
          <div class="caption">
            <h3>Feature Label</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
			</p>
            <p>
              <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 hero-feature">
        <div class="thumbnail">
          <img src="http://placehold.it/800x500" alt="">
          <div class="caption">
            <h3>Feature Label</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <p>
              <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 hero-feature">
        <div class="thumbnail">
          <img src="http://placehold.it/800x500" alt="">
          <div class="caption">
            <h3>Feature Label</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <p>
              <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 hero-feature">
        <div class="thumbnail">
          <img src="http://placehold.it/800x500" alt="">
          <div class="caption">
            <h3>Feature Label</h3>
            <p> <?php include("test.php") ?> </p>
            <p>
              <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
            </p>
          </div>
        </div>
      </div>

    </div>
  </body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  </html>


