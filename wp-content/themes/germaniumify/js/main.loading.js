
function paddAppendClear() {
	jQuery('.append-clear').append('<div class="clear"></div>');
}

function paddWrapInner1() {
	jQuery('.wrap-inner-1').wrapInner('<div class="inner"></div>');
}

function paddWrapInner3() {
	jQuery('.wrap-inner-3').wrapInner('<div class="m"></div>');
	jQuery('.wrap-inner-3').prepend('<div class="t"></div>');
	jQuery('.wrap-inner-3').append('<div class="b"></div>');
}

function paddToggle(classname,value) {
	jQuery(classname).focus(function() {
		if (value == jQuery(classname).val()) {
			jQuery(this).val('');
		}
	});
	jQuery(classname).blur(function() {
		if ('' == jQuery(classname).val()) {
			jQuery(this).val(value);
		}
	});
}

jQuery(document).ready(function() {
	jQuery.noConflict();
	
	jQuery('div#menubar div > ul').superfish({
		hoverClass: 'hover',
		speed: 500,
		animation: { opacity: 'show', height: 'show' }
	});
	
	paddAppendClear();
	paddWrapInner1();
	paddWrapInner3();
	
	jQuery('p.older-articles').titleBoxShadow('#ebebeb');
	jQuery('.hentry-large .title').titleBoxShadow('#ebebeb');
	jQuery('.hentry-large .thumbnail img').imageBoxShadow('#ebebeb');
	
	jQuery('input#s').val('Search this site');
	paddToggle('input#s','Search this site');

	jQuery('div.search form').click(function () {
		jQuery('input#s').focus();
	});
});
