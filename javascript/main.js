/**
 * 
 */

var images = {};

function loadImages(sources){
	var loadedImages = 0;
	 var numImages = 0;
     // get num of sources
     for (var src in sources) {
         numImages++;
     }
     
     for (var src in sources) {
         images[src] = new Image();
         images[src].onload = function(){
             if (++loadedImages >= numImages) {
                 drawImages();
             }
         };
         images[src].src = sources[src];
     }     
}




window.onload = function(){
    var canvas = document.getElementById("myCanvas");
    var context = canvas.getContext("2d");

    var image1 = new Image();
    image1.src = "/images/img_v_1.JPG";    
    image1.onload = function(){
        context.drawImage(image1, 0, 0);  
        context.font = "40pt Calibri";
        context.fillText("Hello World!", 30, 30);
    };
    
    var image2 = new Image();
    image2.src = "/images/img_h_1.JPG";    
    image2.onload = function(){
        context.drawImage(image2, 125, 0);
    };
    
    var image3 = new Image();
    image3.src = "/images/img_v_2.JPG";    
    image3.onload = function(){
        context.drawImage(image3, 375, 0);
    };
    
    var image4 = new Image();
    image4.src = "/images/img_v_3.JPG";    
    image4.onload = function(){
        context.drawImage(image4, 500, 0);            
    };
    
    var image5 = new Image();
    image5.src = "/images/img_h_13.JPG";    
    image5.onload = function(){
        context.drawImage(image5, 625, 0);            
    };
    
    var image6 = new Image();
    image6.src = "/images/img_v_4.JPG";    
    image6.onload = function(){
        context.drawImage(image6, 875, 0);            
    };

};

