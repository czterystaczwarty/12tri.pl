(function($){

	var $pull = $('#pull'),
		$menu = $('nav ul'),
		break_points = [240, 480, 740, 960],
		brick_sizes = [230, 470, 710],
		$window = $(window),
		windowWidth = $window.width(),
		
		init = function () {
			update();
			initSmartNavigation();
		},
		
		update = function () {
			windowWidth = $window.width();
			
			if (windowWidth > break_points[1])
			{
				initMansonry();
				updateNavigation();
			} else {
				$('.posts article').each(function (el, index) {
					$(this).removeAttr('style');
				});
			}
		},
		
		updateNavigation = function () {
			$menu.show();
		},
		
		initSmartNavigation = function () {
			$pull.on('click', function (e)
			{
				e.preventDefault();
				$menu.slideToggle();
			});
		},
		
		initMansonry = function () {
			var $container = $('.list'),
				items = 'article',
				$triples	= $container.children('.triple'),
				$doubles	= $container.children('.double'),
				$singles	= $container.children().not($triples).not($doubles),
				
				mansonry_config = {
					itemSelector: items,
					isAnimated: true,
					columnWidth: function(containerWidth) {
						var windowWidth = $window.width(),
							colWidth;
						
						if (windowWidth > break_points[1] && windowWidth < break_points[2]) {
							colWidth = parseInt(containerWidth/2);
							// singles items width -> 50% fluid
							$singles.width(parseInt(colWidth-10));
							// promoted items width -> 100% fluid
							$doubles.add($triples).width(containerWidth-10);
						} else if (windowWidth >= break_points[2]) {
							colWidth = break_points[0];
							$singles.width(brick_sizes[0]);
							$doubles.width(brick_sizes[1]);
							$triples.width(brick_sizes[2]);
						} else {
							// diable Mansonry
							$container.masonry('destroy');
						}
						
						return colWidth;
					}
				};

			// after images loaded
			$container.imagesLoaded( function() {
				// initiate mansonry
				$container.masonry(mansonry_config);
			});
		}
	
	init();
	$window.on('resize', update);

})(jQuery);