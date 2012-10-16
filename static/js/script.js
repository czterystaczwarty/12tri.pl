$(function(){
	var $pull = $('#pull'),
		$menu = $('nav ul');

	$('.posts').masonry({
		itemSelector: '.post',
		columnWidth: 240
	});

	$pull.on('click', function (e)
	{
		e.preventDefault();
		$menu.slideToggle();
	});

});