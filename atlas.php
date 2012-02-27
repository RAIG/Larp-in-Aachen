<?php $nav = 5; ?>
<?php $banner = "chroniken_banner.jpg"; ?>
<?php include 'includes/header.php'; ?>

<ul class="breadcrumb">
  <li><a href="index.php">Home</a> <span class="divider">/</span></li>
  <li><a href="bibliothek.php">Bibliothek</a> <span class="divider">/</span></li>
  <li class="active">Der gro�e Atlas von Ult</li>
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
							<label class="checkbox"><input type="checkbox" id="box_fluesse" checked>Fl�sse</label>
							<label class="checkbox"><input type="checkbox" id="box_laender" checked>L�nder</label>
							<label class="checkbox"><input type="checkbox" id="box_staedte_namen" checked>St�dte</label>
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
				<div class="center" id="loading" style="display:none;">
				  <p>loading...</p>
				</div>
			</div>
		</div>
	</div>


</div>

<script>
	var images = {};
	var options = {};	

	window.onload = function(images) {

		
		canvas = document.getElementById('atlas');
		context = canvas.getContext('2d');

		canvas.addEventListener('mousedown', canvasEvent, false);
		canvas.addEventListener('mousemove', canvasEvent, false);
		canvas.addEventListener('mouseup',   canvasEvent, false);
		
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
	
	function generateImages(images) {				
		srcCanvas = document.createElement('canvas');
		srcCanvas.width = 3804;
		srcCanvas.height = 4608;
		srcContext = srcCanvas.getContext('2d');

		bufferCanvas = document.createElement('canvas');
		bufferCanvas.width = 3804;
		bufferCanvas.height = 4608;
		contextBuffer = bufferCanvas.getContext('2d');
		
		srcContext.drawImage(images.grund, 0, 0);
		srcContext.drawImage(images.laender, 0, 0);
		srcContext.drawImage(images.fluesse, 0, 0);
		srcContext.drawImage(images.laender_namen, 0, 0);
		srcContext.drawImage(images.staedte_namen, 0, 0);
		srcContext.drawImage(images.verkehr, 0, 0);

		drawImages(0.15, 0, 0);
	}
	
	function drawImages(scale, x, y) {
		contextBuffer.clearRect(0, 0, 3804, 4608);
		contextBuffer.scale(scale, scale);
		contextBuffer.drawImage(srcCanvas, 0, 0);
		
		context.clearRect(0, 0, 720, 540);
		context.drawImage(bufferCanvas, x, y);
	}

	function zoomIn() {
		drawImages(0.75, 0, 0);
	}

	function zoomOut() {
		drawImages(1.25, 0, 0);
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

	mouseRelativeLeft = 0;
	mouseRelativeTop = 0;
	contextLeft = 0;
	contextTop = 0;
	mouseOffsetLeft = 0;
	mouseOffsetTop = 0;
	mouseMove = false;
	
  function canvasEvent (event) {
	  var canvasLeft = document.getElementById('atlas').offsetLeft;
		var canvasTop = document.getElementById('atlas').offsetTop;
	  var x = event.clientX;
	  var y = event.clientY;
	  
		mouseRelativeLeft = x - canvasLeft;
		mouseRelativeTop = y - canvasTop;
	  
		if (event.type == 'mousedown') {			
			mouseOffsetLeft = mouseRelativeLeft - contextLeft;
			mouseOffsetTop = mouseRelativeTop - contextTop;			
			mouseMove = true;
		}
		if ( (event.type == 'mousemove') && (mouseMove) ) {
			context.clearRect(0, 0, 720, 540);
			context.drawImage(bufferCanvas, mouseRelativeLeft - mouseOffsetLeft, mouseRelativeTop - mouseOffsetTop);
		}
		if (event.type == 'mouseup') {
			contextLeft = mouseRelativeLeft - mouseOffsetLeft;
			contextTop = mouseRelativeTop - mouseOffsetTop;
			mouseMove = false;
			//context.clearRect(0, 0, 200, 50);
			//context.fillText("X coords: " + contextLeft + ", Y coords: " + contextTop, 10, 10);
		}
 	}
	

	

</script>

<?php include 'includes/footer.php'; ?>