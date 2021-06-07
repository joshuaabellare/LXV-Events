(function($) {
    "use strict";
    $(document).ready(function() {
        //Tooltip
        $(".dtooltip").tooltip();
    });
    // Smooth Scroll
	$(document).ready(function(){
		$('.scroll').click(function(){
			$('html, body').animate({
				scrollTop: $( $.attr(this, 'href') ).offset().top - $('#section-header .dexp-container').outerHeight(true)
			}, 500);
			return false;
		});
	});
	// App List Container
	$(document).ready(function(){
		$(".site-logo").click(function(){
			$('.app-list-container').css({ 'left': '0'});
		});
		$(".site-logo").click(function(){
			$('.app-list-container').css({ 'left': '-500px'});
		});
		$(".access-apps").click(function(){
			$('.app-list-container').css({ 'left': '0'});
		});
		$(".close-apps").click(function(){
			$('.app-list-container').css({ 'left': '-500px'});
		});
	});
	// App List Overflow
	$(document).ready(function() {
		var app_list_container = $('.app-list-container').height();
		var app_list_header = $('.app-list-header').height();
		var app_list_total_height = app_list_container - app_list_header;
		$('.app-list-overflow').css({
			height: app_list_total_height + "px",
		});
    });
	//Sidebar Sticky
	$(document).ready(function() {
		if($('#sidebar-sticky').html() != null){
			function sticky_relocate() {
				var window_top = $('#section-header .dexp-container').offset().top + $('#section-header .dexp-container').outerHeight(true);
				var div_top = $('#sticky-anchor').offset().top;
				var footer_top = $('#section-footer').offset().top - parseFloat($('#section-footer').css('marginTop').replace(/auto/, 0));
				var maxY = footer_top - $('#sidebar-sticky').outerHeight();
				var top = $('#sidebar-sticky').offset().top - parseFloat($('#sidebar-sticky').css('marginTop').replace(/auto/, 0));
				var sidebar_width = $('#sidebar-sticky').width();
				if (window_top > div_top) {
					$('#sidebar-sticky').css({
						position: 'fixed',
						top: '130px',
						width: sidebar_width + "px"
					});
				}
				else {
					$('#sidebar-sticky').css({
						position: 'relative',
						top: '0px'
					});
				}
				if($('#sticky-anchor-stop').html() != null){
					var anchor_stop = $('#sticky-anchor-stop').offset().top - parseFloat($('#sticky-anchor-stop').css('marginTop').replace(/auto/, 0));
					var maxAnchor = anchor_stop - $('#sidebar-sticky').outerHeight();
					if (window_top > maxAnchor) {
						$('#sidebar-sticky').css({
							position: 'absolute',
							top: (maxAnchor - div_top) + 'px',
							width: sidebar_width + "px"
						});
					}
				}
				else{
					if (window_top > maxY) {
					$('#sidebar-sticky').css({
						position: 'absolute',
						top: (maxY - div_top) + 'px',
						width: sidebar_width + "px"
					});
					}
				} 
			}
			$(function() {
				$(window).scroll(sticky_relocate);
				sticky_relocate();
			});
		}
	});
	$(document).ready(function() {
		$(".slick-item-prev").click(function(){
			$(this).closest(".slick--slider").find(".slick-prev").click();
		});
		$(".slick-item-next").click(function(){
			$(this).closest(".slick--slider").find(".slick-next").click();
		});
	});
	// Screen Height LXV Global Sidebar Drop Down Menu
	$(document).ready(function() {
		var screen_height = $(window).height();
		$('.lxv-group-drop-down-menu-container').css({
			height: screen_height + "px",
		});
		$(window).resize(function() {
			var screen_height = $(window).height();
			$('.lxv-group-drop-down-menu-container').css({
				height: screen_height + "px",
			});
		});
	});
})(this.jQuery);