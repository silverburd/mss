$(document).ready(function() {
        $('#adblock img').click(function(evt) {
                //get path to new image
		var imgPath = $(this).attr('src');     
		//get caption for image
		var captionPath = $(this).attr('title');
		//get rid of old caption
		var oldCaption = $('.caption');
		//get reference to old image
		var oldImage = $('#photo img');
		//create text for caption 
		var imgCaption = $('<h1 class=\"caption\">' + captionPath + '</h1>');
		//create HTML for new image
		var newImage = $('<img src="' + imgPath +'">');
                //make new image invisible
                newImage.hide();
                //add to the #photo div
                $('#photo').prepend(newImage);
                $('#photo').prepend(imgCaption);
		//fade in new image
                newImage.fadeIn(200);
                imgCaption.fadeIn(200);       
	        //fade out old image and remove from DOM
                oldImage.fadeOut(200,function(){
                     $(this).remove();
                });
		oldCaption.fadeOut(100,function(){
			$(this).remove();
		});
                         
                 $('.adtexth1, .adtexth4').hide();
        }); // end click
                
                $('#gallery a:first').click();
}); // end ready
