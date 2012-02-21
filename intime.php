<?php $nav = 4; ?>

<?php include 'includes/header.php'; ?>

<div class="row">
	<div class="span2">  
	    <div class="sidebar">
			<div class="well">
				<ul class="nav nav-list">
				 	<li class="nav-header">Raigl�nder S�ldner</li>
					<li><a href="#">�ber us</a></li>
					<li><a href="#">Referenzen</a></li>
					<li><a href="#">Karriere</a></li>
					<li><a href="#">Presse</a></li>
				</ul>          
			</div>	
		</div>
	</div>  

	<div class="span10">	
		
		<ul class="breadcrumb">
		  <li><a href="index.php">Home</a> <span class="divider">/</span></li>
		  <li><a href="intime.php">Intime</a> <span class="divider">/</span></li>
		  <li class="active">Raigl�nder S�ldner</li>
		</ul>		
		
		<div class="color-box">
		
			<div class="row">
				<div class="span10">				
					<div class="content-header">
						<h3>Under construction...</h3>
					</div>
				</div>
			</div>
			
			
			<div class="row">
				<div class="span5">					
					<?php if ( isset( $prev_link ) ) { echo "<div class='content'><a href='$prev_link'>&laquo Zur�ck zu &#8220$prev_name&#8221</a></div>"; } ?>		
				</div>
				<div class="span5 <?php if ( !isset( $prev_link ) ) { echo "offset5"; } ?> right">					
					<?php if ( isset( $next_link ) ) { echo "<div class='content'><a href='$next_link'>Weiter zu &#8220$next_name&#8221 &raquo</a></div>"; } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include 'includes/footer.php'; ?>