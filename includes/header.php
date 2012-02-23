<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="ISO-8859-1">
  <title>Larp in Aachen</title>
  <meta name="description" content="Webpräsenz der Raigländer Söldner, der Liverollenspielgruppe aus dem Raum Aachen."/>
  <meta name="keywords" content="Larp, Liverollenspiel, Aachen, Raigland, Söldner" />
  <?php if ( isset( $index ) && ( $index == false ) ) { echo '<meta name="robots" content="noindex, follow"/>
  <meta name="googlebot" content="noindex, follow"/>'; } ?>
	
  <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Le styles -->
  <link href="/css/bootstrap.css" rel="stylesheet">
  <link href="/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="/css/raig.css" rel="stylesheet">
  <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
    
  <!-- Google Analytics -->
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push([ '_setAccount', 'UA-29132292-1' ]);
		_gaq.push([ '_trackPageview' ]);

		(function() {
			var ga = document.createElement('script');
			ga.type = 'text/javascript';
			ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl'
					: 'http://www')
					+ '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(ga, s);
		})();
	</script>
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
				<div class="nav-collapse">
					<ul class="nav">
						<li  <?php if ( $nav == 1 ) { echo "class='active'"; } ?>><a href="index.php">Home</a></li>
						<li  <?php if ( $nav == 2 ) { echo "class='active'"; } ?>><a href="termine.php">Termine</a></li>
						<li  <?php if ( $nav == 3 ) { echo "class='active'"; } ?>><a href="galerie.php">Galerie</a></li>
						<li  <?php if ( $nav == 4 ) { echo "class='active'"; } ?>><a href="intime.php">Intime</a></li>
						<li  <?php if ( $nav == 5 ) { echo "class='active'"; } ?>><a href="bibliothek.php">Bibliothek</a></li>
						<li class="dropdown">
						<a href="#" class="dropdown-toggle"	data-toggle="dropdown">Kontakt<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="kontakt.php">Ansprechpartner</a></li>
								<li class="divider"></li>
								<li><a target="_blank" href="http://www.wyverex.de/nebula/phpbb2/index.php">Forum	<i class="icon-share-alt"></i></a></li>
								<li><a href="#">Gästebuch <i class="icon-share-alt"></i></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="title-bar">
		<div class="container">
			<div class="row">
				<div class="span12">
          <h1>Larp in Aachen</h1>
				</div>
			</div>
		</div>
	</div>	

	<div class="subtitle-bar">
	<div class="container">

	<div class="row">
	<div class="span12">
	<div class="content-header">
    <p>
      <span class="label label-warning">Beta</span> Die Webpräsenz der
      Raigländer Söldner befindet sich noch im Aufbau. Der Inhalt wird
      mit und mit an das neue Design angepasst und eingepflegt.
    </p>
  </div>
	</div>
	</div>

	</div>
	</div>
	
	
	
	
	<div class="container">