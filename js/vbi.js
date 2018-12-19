

$(document).ready(function(){
	$('.carousel').carousel({
		interval: 4000
	})
	
	// $("#navBarCollapsibleOptions .nav-link").removeAttr("href");
	
	var items = document.getElementsByClassName("navOptionsSection");
	var i, idSection;
	for (i = 0; i < items.length; i++) {	
		idSection = items[i].id;
	    // console.log(i + "" +idSection);
	   (function(i, idSection) {
			new Waypoint({
				element: document.getElementById(idSection),
				handler: function(direction) {
					$('#navBarCollapsibleOptions li').removeClass('active');
					if(direction == 'down')
						 $('#navBarCollapsibleOptions li:nth-child(' + (i+1 + 1) + ')').addClass('active');
					else {
						 $('#navBarCollapsibleOptions li:nth-child(' + (i+1 + 1) + ')').removeClass('active');
						 if(i != 0)
							$('#navBarCollapsibleOptions li:nth-child(' + (i + 1) + ')').addClass('active');
					}
				},
				offset: document.getElementById('navBar').offsetHeight
			})
			
			$("#navBarCollapsibleOptions li:nth-child(" + (i+1 + 1) + ")").click(function(e) {
				e.preventDefault();
				// console.log(i + " " + idSection);
				$('html,body').animate({
					scrollTop: $("#" + idSection ).offset().top},
					'slow');
			});
		})(i, idSection);
	}
});