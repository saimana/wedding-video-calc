jQuery(document).ready(function(){

jQuery('#infoPanel').stickyScroll({ container: '#calcWrapper' });

/*
var infoCont = jQuery('#infoPanel'),
top_offset = jQuery('#calcWrapper').offset().top;

jQuery(window).scroll(function() {

  var scroll_top = jQuery(window).scrollTop();

  if (scroll_top > top_offset) {
	infoCont.css('top', scroll_top - top_offset);
  }
  else {
	infoCont.css('top', '');
  }
});*/

jQuery("#datepicker").datepicker();
jQuery("#bluray, #dvd").slideUp();

jQuery("input[name=scenes]").click(function() {
	if(jQuery(this).val() == 3 ) {
		jQuery("#montage").slideUp(500);
	} else {
		jQuery("#montage").slideDown(500);
	}

});


jQuery("input[name=bluray]").click(function() {
	if(!jQuery(this).is(':checked')) {
		jQuery("#bluray").slideUp(500);
	} else {
		jQuery("#bluray").slideDown(500);
	}

});

jQuery("input[name=dvd]").click(function() {

	if(!jQuery(this).is(':checked')) {
		jQuery("#dvd").slideUp(500);
	} else {
		jQuery("#dvd").slideDown(500);
	}

});

	
	jQuery('#checker').click(function() {
		
		var input = jQuery('#calcform').serialize();
		
		jQuery.ajax({
			type : 'POST',
			url : '/blog/wp-content/plugins/wedding-calculator/result.php',
			dataType : 'json',
			data: input + "&calc=true",
			success : function(data){

			if(data.error === true){
					jQuery('#price').fadeOut(500);
					jQuery('#warning').html("<strong>" + data.warning + "<strong>").fadeIn(500);
					
				}
				if(data.error === false) {
					jQuery('#warning').fadeOut(500);
					jQuery('#price').html(data.text + "<strong>" + data.price + " лв.<strong>").fadeIn(500);
					
				}
			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {
				jQuery('#price').removeClass().addClass('error').text('There was an error.').show(500);

			}
			
		});
		
		return false;
	});
	
	jQuery('#sender').click(function() {
		
		var input = jQuery('#calcform').serialize();
		
		jQuery.ajax({
			type : 'POST',
			url : '/blog/wp-content/plugins/wedding-calculator/result.php',
			dataType : 'json',
			data: input + "&sender=true",
			success : function(data){

			if(data.error === true){
					//jQuery('#price').fadeOut(500);
					jQuery('#warning').html("<strong>" + data.warning + "<strong>").fadeIn(500);
					
				}
				if(data.error === false) {
					jQuery('#warning').fadeOut(500);
					//jQuery('#price').html(data.text + "<strong>" + data.price + " лв.<strong>").fadeIn(500);
					
				}
			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {
				jQuery('#price').removeClass().addClass('error').text('There was an error.').show(500);

			}
			
		});
		
		return false;
	});
	
});