$('.the-content').perfectScrollbar({
	suppressScrollX : true,
	wheelSpeed: 20,
  	wheelPropagation: false
});

$.each($('a','#nav'), function() {
	$(this).text('');
});

// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();