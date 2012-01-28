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

  <!-- Le javascript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
  <script src="js/bootstrap-dropdown.js"></script>
  <script src="js/bootstrap-modal.js"></script>
  <script src="js/bootstrap-twipsy.js"></script>
  <script src="js/bootstrap-popover.js"></script>

  <!-- Le styles -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <style type="text/css">
    body {
      padding-top: 60px;
    }
  </style>

  <!-- Le fav and touch icons -->
  <link rel="shortcut icon" href="images/favicon.ico">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
</head>

<body>

  <div class="topbar">
    <div class="fill">
      <div class="container">
        <a class="brand" rel="popover" title="v.0.1 beta" data-placement="below" data-content="Die Webpräsenz der Raigländer Söldner befindet sich noch im Aufbau. Der Inhalt wird mit und mit an das neue Design angepasst und eingepflegt." href="index.php">Larp in Aachen beta</a>
          <script>
            $(function () {
              $("a[rel=popover]")
                .popover({
                  offset: 10
                })
                .click(function(e) {
                  e.preventDefault()
                })
            })
          </script>
        <ul class="nav">
          <li <?php if ( $nav == 1 ) { echo "class='active'"; } ?> ><a href="index.php">Home</a></li>
          <li <?php if ( $nav == 2 ) { echo "class='active'"; } ?> ><a href="termine.php">Termine</a></li>
          <li <?php if ( $nav == 3 ) { echo "class='active'"; } ?> ><a href="galerie.php">Galerie</a></li>
          <li <?php if ( $nav == 4 ) { echo "class='active'"; } ?> ><a href="intime.php">Intime</a></li>
          <li <?php if ( $nav == 5 ) { echo "class='active'"; } ?> ><a href="bibliothek.php">Bibliothek</a></li>
          <li class="dropdown" data-dropdown="dropdown" >
		    <a href="#" class="dropdown-toggle">Kontakt</a>
		    <ul class="dropdown-menu">
		      <li><a href="kontakt.php">Ansprechpartner</a></li>
		      <li class="divider"></li>
		      <li><a href="#">Forum</a></li>
		      <li><a href="#">Gästebuch</a></li>
		    </ul>
		  </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container">
  