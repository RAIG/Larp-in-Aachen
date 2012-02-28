function set_picture(position)
{
	$('#myCarousel').carousel(position);
	$('#myCarousel').carousel('pause');            	
	return false;
}

$(function () { 
	$("#help").popover({placement:'bottom'});  
});  
