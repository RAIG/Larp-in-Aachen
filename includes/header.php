<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="ISO-8859-1">
  <title>Larp in Aachen</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Le styles -->
  <link href="/css/bootstrap.css" rel="stylesheet">
  <link href="/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="/css/raig.css" rel="stylesheet">


</head>

<body>

  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
        <a class="brand" href="index.php">Larp in Aachen beta</a>
		<div class="nav-collapse">
	        <ul class="nav">
	          <li <?php if ( $nav == 1 ) { echo "class='active'"; } ?> ><a href="index.php">Home</a></li>
	          <li <?php if ( $nav == 2 ) { echo "class='active'"; } ?> ><a href="termine.php">Termine</a></li>
	          <li <?php if ( $nav == 3 ) { echo "class='active'"; } ?> ><a href="galerie.php">Galerie</a></li>
	          <li <?php if ( $nav == 4 ) { echo "class='active'"; } ?> ><a href="intime.php">Intime</a></li>
	          <li <?php if ( $nav == 5 ) { echo "class='active'"; } ?> ><a href="bibliothek.php">Bibliothek</a></li>
	          <li class="dropdown">
			    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kontakt<b class="caret"></b></a>
			    <ul class="dropdown-menu">
			      <li><a href="kontakt.php">Ansprechpartner</a></li>
			      <li class="divider"></li>
			      <li><a target="_blank" href="http://www.wyverex.de/nebula/phpbb2/index.php">Forum</a></li>
			      <li><a href="#">G�stebuch</a></li>
			    </ul>
			  </li>
	        </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
  