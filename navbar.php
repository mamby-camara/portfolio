<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Freelancer</title>

  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="css/freelancer.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

</head>

<body id="page-top">


<!-- Navigation -->
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="http://localhost/portfolio/index.php?page=accueil">M.CAMARA</a>
    <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item mx-0 mx-lg-1">
          <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger <?php if(!isset($_GET['page']) || $_GET['page'] == "accueil"){ echo "active"; } ?>" href="http://localhost/portfolio/index.php?page=accueil">Accueil</a>
        </li>
        <li class="nav-item mx-0 mx-lg-1">
          <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger <?php if($_GET['page'] == "realisations"){ echo "active"; } ?>" href="http://localhost/portfolio/index.php?page=realisations">Compétences</a>
        </li>
      <!--  <li class="nav-item mx-0 mx-lg-1"> 
          <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger <?php if($_GET['page'] == "contact"){ echo "active"; } ?>" href="http://localhost/portfolio/index.php?page=contact">Commentaire</a>
        </li> -->
      </ul>
    </div>
  </div>
</nav>