<?php $nav = 3; ?>

<?php include 'includes/header.php'; ?>

<div class="row">
	<div class="span2">  
	    <div class="sidebar">
			<div class="well">

				<ul class="nav nav-list">
				 	<li class="nav-header">Interne Galerien</li>
					<li><a href="galerie_veranstaltungen.php">Veranstaltungen</a></li>
					<li><a href="">Gewandung</a></li>
					<li><a href="">Ausstattung</a></li>
					<li><a href="">Kriegsgerät</a></li>
					<li><a href="">Lager</a></li>
					<li class="nav-header">Externe Galerien</li>
					<li><a target="_blank" href="http://www.flickr.com/photos/29432406@N02/sets/72157621994444018/">Conquest 2009 <i class="icon-share-alt"></i></a></li>
					<li><a target="_blank" href="http://www.flickr.com/photos/29432406@N02/sets/72157606661934836/">Conquest 2008 <i class="icon-share-alt"></i></a></li>	
				</ul>          
			</div>	
		</div>
	</div>  

	<div class="span10">	
		
		<ul class="breadcrumb">
		  <li><a href="index.php">Home</a> <span class="divider">/</span></li>
		  <li><a href="galerie.php">Galerie</a> <span class="divider">/</span></li>
		  <li class="active">Veranstaltungen</li>
		</ul>		
		
		<div class="color-box">
		
			<div class="row">
				<div class="span10">				
					<div class="content-header">
						<h3>Conquest 2010</h3>
					</div>
				</div>
			</div>
			<ul class="thumbnails">
				<li class="span2">
          <div class="content">
              <a href="#" class="thumbnail"><img src="http://placehold.it/160x120" alt=""></a>
          </div>
	      </li>
				<li class="span2">
          <div class="content">
              <a href="#" class="thumbnail"><img src="http://placehold.it/160x120" alt=""></a>
          </div>
	      </li>
	      <li class="span2">
          <div class="content">
              <a href="#" class="thumbnail"><img src="http://placehold.it/160x120" alt=""></a>
          </div>
	      </li>
	      <li class="span2">
          <div class="content">
              <a href="#" class="thumbnail"><img src="http://placehold.it/160x120" alt=""></a>
          </div>
	      </li>
	      <li class="span2">
          <div class="content">
              <a href="#" class="thumbnail"><img src="http://placehold.it/160x120" alt=""></a>
          </div>
	      </li>	      
			</ul>
			<div class="row">
				<div class="span10">				
					<div class="content-header">
						<h3>Hamarsmark 2008</h3>
					</div>
				</div>
			</div>
			<ul class="thumbnails">
				<li class="span2">
          <div class="content">
              <a href="#" class="thumbnail"><img src="http://placehold.it/160x120" alt=""></a>
          </div>
	      </li>
				<li class="span2">
          <div class="content">
              <a href="#" class="thumbnail"><img src="http://placehold.it/160x120" alt=""></a>
          </div>
	      </li>
	      <li class="span2">
          <div class="content">
              <a href="#" class="thumbnail"><img src="http://placehold.it/160x120" alt=""></a>
          </div>
	      </li>
	      <li class="span2">
          <div class="content">
              <a href="#" class="thumbnail"><img src="http://placehold.it/160x120" alt=""></a>
          </div>
	      </li>
	      <li class="span2">
          <div class="content">
              <a href="#" class="thumbnail"><img src="http://placehold.it/160x120" alt=""></a>
          </div>
	      </li>	      
			</ul>
			
			<?php $prev_name = "Galerie"; ?>
			<?php $prev_link = "galerie.php"; ?>

			
			<div class="row">
				<div class="span5">					
					<?php if ( isset( $prev_link ) ) { echo "<div class='content'><a href='$prev_link'>&laquo Zurück zu &#8220$prev_name&#8221</a></div>"; } ?>		
				</div>
				<div class="span5 <?php if ( !isset( $prev_link ) ) { echo "offset5"; } ?> right">					
					<?php if ( isset( $next_link ) ) { echo "<div class='content'><a href='$next_link'>Weiter zu &#8220$next_name&#8221 &raquo</a></div>"; } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include 'includes/footer.php'; ?>