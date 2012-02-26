<?php $nav = 5; ?>
<?php $banner = "chroniken_banner.jpg"; ?>
<?php include 'includes/header.php'; ?>

<ul class="breadcrumb">
  <li><a href="index.php">Home</a> <span class="divider">/</span></li>
  <li><a href="bibliothek.php">Bibliothek</a> <span class="divider">/</span></li>
  <li class="active">Der große Atlas von Ult</li>
</ul>


<div class="row">
	<div class="span9">
		<div class="color-box">
			<canvas id="atlas" width="720" height="540"></canvas>
		</div>
	</div>

	<div class="span3">
		<div class="row">
			<div class="span3">
				<div class="control-group color-box">
					<div class="content">
						<label class="control-label" for="optionsCheckboxList">Anzeige</label>
							<div class="controls">
							<label class="checkbox"><input type="checkbox" id="box_fluesse" checked>Flüsse</label>
							<label class="checkbox"><input type="checkbox" id="box_laender" checked>Länder</label>
							<label class="checkbox"><input type="checkbox" id="box_staedte_namen" checked>Städte</label>
							<label class="checkbox"><input type="checkbox" id="box_verkehr" checked>Verkehr</label>  
						</div>
						<div class="btn-toolbar">
							<div class="btn-group">
					  		<a class="btn" onclick="zoomIn()"><i class="icon-minus"></i></a>
					  		<a class="btn" onclick="zoomOut()"><i class="icon-plus"></i></a>
							</div>
							<div class="btn-group">
								<a class="btn" onclick="showImages()">Anzeigen</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span3">
				<div class="center" id="loading">
				  <p>loading...</p>
				</div>
			</div>
		</div>
	</div>


</div>

<script>
	var images = {};
	var options = {};	

	function loadImages(sources, callback) {
			
		var loadedImages = 0;
		var numImages = 0;

		for (var src in sources) {
			numImages++;
		}
		for (var src in sources) {
			images[src] = new Image();
			images[src].onload = function() {
				if (++loadedImages >= numImages) {
					callback(images);
				}				
			};
			images[src].src = sources[src];
		}
	}

	function zoomIn() {
		drawImages(0.75);
	}

	function zoomOut() {
		drawImages(1.25);
	}

	function showImages() {
		contextBuffer.clearRect(0, 0, 3804, 4608);
		contextBuffer.drawImage(images.grund, 0, 0);
		
		if ( document.getElementById('box_fluesse').checked == true ) {			
			contextBuffer.drawImage(images.fluesse, 0, 0);
		}
		if ( document.getElementById('box_laender').checked == true ) {			
			contextBuffer.drawImage(images.laender, 0, 0);
			contextBuffer.drawImage(images.laender_namen, 0, 0);
		}
		if ( document.getElementById('box_staedte_namen').checked == true ) {			
			contextBuffer.drawImage(images.staedte_namen, 0, 0);
		}
		if ( document.getElementById('box_verkehr').checked == true ) {			
			contextBuffer.drawImage(images.verkehr, 0, 0);
		}
		drawImages(1);
	}
	
	function drawImages(scale) {
		var canvas = document.getElementById('atlas');
		var context = canvas.getContext('2d');
		context.clearRect(0, 0, 3804, 4608);
		context.scale(scale, scale);
		context.drawImage(bufferCanvas, 0, 0);
		document.getElementById('loading').style.display = "none";
	}
	
	function generateImages(images) {
		document.getElementById('loading').style.display = "block";
		bufferCanvas = document.createElement('canvas');
		bufferCanvas.width = 3804;
		bufferCanvas.height = 4608;
		contextBuffer = bufferCanvas.getContext('2d');

		contextBuffer.drawImage(images.grund, 0, 0);
		contextBuffer.drawImage(images.laender, 0, 0);
		contextBuffer.drawImage(images.fluesse, 0, 0);
		contextBuffer.drawImage(images.laender_namen, 0, 0);
		contextBuffer.drawImage(images.staedte_namen, 0, 0);
		contextBuffer.drawImage(images.verkehr, 0, 0);

		drawImages(0.15);
	}
	
	window.onload = function(images) {	
		var sources = {
			grund: "/img/ult_grund.png",
			laender: "/img/ult_laender.png",
			fluesse: "/img/ult_fluesse.png",
			laender_namen: "/img/ult_laender_namen.png",
			staedte_namen: "/img/ult_staedte_namen.png",
			verkehr: "/img/ult_verkehr.png"
		};
		loadImages(sources, generateImages);
	};
</script>

<?php include 'includes/footer.php'; ?>