/**
 * 
 */

function openWindow(url,title) { 
helpwindow = window.open(url,title,"menubar=no, width=700, height=600,scrollbars=yes");
helpwindow.focus();
return false;
}

function renderBuffer() {
	var buffer = document.createElement('canvas');
	buffer.width = 1000;
	buffer.height = 175;
	   	    	
	bufferContext = buffer.getContext('2d');
	
	var image1 = new Image();
    image1.src = "/images/img_v_1.JPG";  
	bufferContext.drawImage(image1, 0 ,0);	
    
    var image2 = new Image();
    image2.src = "/images/img_h_1.JPG";
    bufferContext.drawImage(image2, 125, 0);
    
    var image3 = new Image();
    image3.src = "/images/img_v_2.JPG";
    bufferContext.drawImage(image3, 375, 0);
    
    var image4 = new Image();
    image4.src = "/images/img_v_3.JPG";
    bufferContext.drawImage(image4, 500, 0);
    
    var image5 = new Image();
    image5.src = "/images/img_h_13.JPG"; 
    bufferContext.drawImage(image5, 625, 0);            

    var image6 = new Image();
    image6.src = "/images/img_v_4.JPG";
    bufferContext.drawImage(image6, 875, 0);
    
	return buffer;	
}

function drawImage() {
    var canvas = document.getElementById("myCanvas");
    if(canvas.getContext){
    	// canvas supported
    	var context = canvas.getContext("2d");    	
    	
    	var images = renderBuffer();
    	context.drawImage(images, 0, 0);
    	
        context.font = "50pt Calibri";
        context.fillStyle = "#F2F2F2";
        context.strokeStyle = "#1F1F1F";
        context.fillText("Larp in Aachen", 10, 165);
        context.strokeText("Larp in Aachen", 10, 165);
        
        context.font = "20pt Calibri";
        context.fillText("beta", 420, 165);
    }else{
    	
    	// fallback
    }	
}


window.onload = drawImage;

