function set_picture(position, dest)
{
	$('#' + dest).carousel(position);
	$('#' + dest).carousel('pause');            	
	return false;
}

$(function () { 
	$("#help").popover({placement:'bottom'});  
});  
