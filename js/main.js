$(document).ready(function () {

	$('#footer-note').hover(
		function() {
			$('#footer-note').addClass('in');
		},
		function() {
			$('#footer-note').removeClass('in');
		}
	);
	
	$('#social-links li a').hover(
		function(e) {
			var service = $(this).attr('title');
			$('#title').animate({'opacity': 0}, 100, function () {
				$(this).text(service);
			}).animate({'opacity': 1}, 100);
		},
		function(e) {
		}
	);
	
	$('#social-links').hover(
		function() {
			
		},
		function() {
			if ($('#title').text() != 'Developer Support Engineer @ Facebook')  {
			$('#title').animate({'opacity': 0}, 100, function () {
				$(this).text('Developer Support Engineer @ Facebook');
			}).animate({'opacity': 1}, 100);
			}
		}
	)

});