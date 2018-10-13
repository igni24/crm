function carruselMultiple(options) {
	var defaults = {
		elem: $(".carousel"),
		slides: 4,
  };

  var params = $.extend(defaults, options);

  var elem = params.elem;
  var slides = params.slides - 2;

	elem.find(".carousel-item").each(function() {
		var next = $(this).next();
		if(!next.length) next = $(this).siblings(":first");

		next.children(":first-child").clone().appendTo( $(this) );

		if(slides > 0) {
			for(var i = 0; i < slides; i++) {
				next = next.next();
				if(!next.length) next = $(this).siblings(":first");
				
				next.children(":first-child").clone().appendTo( $(this) );
			}
		}
	});
}