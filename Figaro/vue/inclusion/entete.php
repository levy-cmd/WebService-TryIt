<!DOCTYPE html>
<html>

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="actualities">
  <meta name="author" content="pandiris">

  <title>Figaro Actualités</title>

  <!-- Bootstrap core CSS -->
  <link href="vue/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vue/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="vue/css/clean-blog.min.css" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-toggleable-sm navbar-light fixed-top" id="mainNav">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="./index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="vue/about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="vue/contact.html">Contact</a>
          </li>
        </ul>


        <?php //if (!empty($user)) : ?>   
    <form id="signin" class="navbar-form navbar-right" role="form" method="post" action="controleur/FormController.php">
        <div class="navbar-nav ml-auto navbar-right">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="login" type="login" class="form-control" name="login" value="" placeholder="Login">
          </div>

          <div class="input-group" style="margin-left:10px">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password">
          </div>

          <button type="submit" class="btn btn-primary" style="margin-left:10px">Connexion</button>
        </div>
      </div>
    </div>
    </form>
    <?php //endif ?>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('https://sportbusiness.club/wp-content/uploads/2020/04/Le-Figaro-1.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1> Figaro Actualités</h1>
            <span class="subheading">« Sans la liberté de blâmer, il n'est point d'éloge flatteur »</span>
          </div>
        </div>
      </div>
    </div>
  </header>