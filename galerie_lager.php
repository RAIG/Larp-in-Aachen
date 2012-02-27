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
				<a data-toggle="modal" href="#popup_galerie" class="thumbnail"  onclick="set_picture(0);"><img src="/img/lager01_small.JPG"></a>
			</div>
		</li>
		<li class="span2">
			<div class="content">
				<a data-toggle="modal" href="#popup_galerie" class="thumbnail"  onclick="set_picture(1);"><img src="/img/lager02_small.JPG"></a>
			</div>
		</li>
		<li class="span2">
			<div class="content">
				<a data-toggle="modal" href="#popup_galerie" class="thumbnail"  onclick="set_picture(2);"><img src="/img/lager03_small.JPG"></a>
			</div>
		</li>
		<li class="span2">
			<div class="content">
				<a data-toggle="modal" href="#popup_galerie" class="thumbnail"  onclick="set_picture(3);"><img src="/img/lager04_small.jpg"></a>
			</div>
		</li>
		<li class="span2">
			<div class="content">
				<a data-toggle="modal" href="#popup_galerie" class="thumbnail"  onclick="set_picture(4);"><img src="/img/lager05_small.jpg"></a>
			</div>
		</li>      
	</ul>
	
	<ul class="thumbnails">
		<li class="span2">
			<div class="content">
				<a data-toggle="modal" href="#popup_galerie" class="thumbnail"  onclick="set_picture(5);"><img src="/img/lager07_small.jpg"></a>
			</div>
		</li>
		<li class="span2">
			<div class="content">
				<a data-toggle="modal" href="#popup_galerie" class="thumbnail"  onclick="set_picture(6);"><img src="/img/lager08_small.jpg"></a>
			</div>
		</li>
		<li class="span2">
			<div class="content">
				<a data-toggle="modal" href="#popup_galerie" class="thumbnail"  onclick="set_picture(7);"><img src="/img/lager09_small.jpg"></a>
			</div>
		</li>
		<li class="span2">
			<div class="content">
				<a data-toggle="modal" href="#popup_galerie" class="thumbnail"  onclick="set_picture(8);"><img src="/img/lager10_small.jpg"></a>
			</div>
		</li>
		<li class="span2">
			<div class="content">
				<a data-toggle="modal" href="#popup_galerie" class="thumbnail"  onclick="set_picture(9);"><img src="/img/lager11_small.jpg"></a>
			</div>
		</li>      
	</ul>
	
	<script type="text/javascript">

  </script>
  
	
	<!-- Popup -->
	<div id="popup_galerie" class="modal hide fade">
		<div class="modal-header">
			<a class="close" data-dismiss="modal" >&times;</a>
			<h4>Lager</h4>
		</div>
		<div class="modal-body">		
			<div id="myCarousel" class="carousel slide">
				<div class="carousel-inner">
					<div class="item active"><img src="/img/lager01.JPG"></div>
					<div class="item"><img src="/img/lager02.JPG"></div>
					<div class="item"><img src="/img/lager03.JPG"></div>
					<div class="item"><img src="/img/lager04.jpg"></div>
					<div class="item"><img src="/img/lager05.jpg"></div>
					<div class="item"><img src="/img/lager07.jpg"></div>
					<div class="item"><img src="/img/lager08.jpg"></div>
					<div class="item"><img src="/img/lager09.jpg"></div>
					<div class="item"><img src="/img/lager10.jpg"></div>
					<div class="item"><img src="/img/lager11.jpg"></div>
				</div>
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>
		</div>
	</div>
			
<?php include 'galerie_footer.php'; ?>
<?php include 'includes/footer.php'; ?>