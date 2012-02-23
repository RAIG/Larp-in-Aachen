<?php $nav = 3; ?>

<?php include 'includes/header.php'; ?>

<?php include 'galerie_header.php'; ?>	
		
<ul class="breadcrumb">
  <li><a href="index.php">Home</a> <span class="divider">/</span></li>
  <li><a href="galerie.php">Galerie</a> <span class="divider">/</span></li>
  <li class="active">Lager</li>
</ul>		
		
<div class="color-box">
		
	<ul class="thumbnails">
		<li class="span2">
			<div class="content">
				<a href="#" class="thumbnail"><img src="/img/lager01_small.JPG" alt=""></a>
			</div>
		</li>
		<li class="span2">
			<div class="content">
				<a href="#" class="thumbnail"><img src="/img/lager02_small.JPG" alt=""></a>
			</div>
		</li>
		<li class="span2">
			<div class="content">
				<a href="#" class="thumbnail"><img src="/img/lager03_small.JPG" alt=""></a>
			</div>
		</li>
		<li class="span2">
			<div class="content">
				<a href="#" class="thumbnail"><img src="/img/lager04_small.JPG" alt=""></a>
			</div>
		</li>
		<li class="span2">
			<div class="content">
				<a href="#" class="thumbnail"><img src="/img/lager05_small.JPG" alt=""></a>
			</div>
		</li>      
	</ul>


<?php $prev_name = "Galerie"; ?>
<?php $prev_link = "galerie.php"; ?>

			
<?php include 'galerie_footer.php'; ?>

<?php include 'includes/footer.php'; ?>