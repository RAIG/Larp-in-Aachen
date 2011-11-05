


window.onload = function() {	
	
	var canvas = document.getElementById("atlas");
	if(canvas.getContext){
		// canvas supported
		var context = canvas.getContext("2d");    	
		
		//var images = renderBuffer();
		
		var image = new Image();
	    image.src = "/images/ult.png"; 
	    
		image.onload = function() {
			context.drawImage(image, 0, 0);
			
			drawBanner();
		};	
	}else{
		
		// fallback
	}	


};

