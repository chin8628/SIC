
(function($) {
	$.fn.titleBoxShadow = function(shadowColor) {
		var sc = shadowColor;
		return this.each(function(i) {
			var $this = $(this);
			$this.find(':first').css({ float: 'left' });
			h = $this.find(':first').innerHeight() - 10;
			$this.append('<div style="float: left; margin: 10px 0 0 0; width: 10px; height: ' + h + 'px; background-color: ' + sc + ';"></div>');
			$this.append('<div style="clear: both; margin: 0 0px 0 20px; height: 10px; background-color: ' + sc + ';"></div>');
		});
	};
	$.fn.imageBoxShadow = function(shadowColor) {
		var sc = shadowColor;
		return this.each(function(i) {
			var $this = $(this);
			$this.wrap('<div></div>')
			$this.css({ float: 'left' });
			w = $this.innerWidth();
			h = $this.innerHeight() - 10;
			$this.parent().append('<div style="float: left; margin: 10px 0 0 0; width: 10px; height: ' + h + 'px; background-color: ' + sc + ';"></div>');
			$this.parent().append('<div style="clear: both; margin: 0 0px 0 10px; width: ' + w + 'px; height: 10px; background-color: ' + sc + ';"></div>');
		});
	};
})(jQuery);