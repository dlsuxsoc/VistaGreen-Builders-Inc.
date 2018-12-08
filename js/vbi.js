

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
						 $('#navBarCollapsibleOptions li:nth-child(' + (i+1) + ')').addClass('active');
					else {
						 $('#navBarCollapsibleOptions li:nth-child(' + (i+1) + ')').removeClass('active');
						 $('#navBarCollapsibleOptions li:nth-child(' + (i) + ')').addClass('active');
					}
				},
				offset: document.getElementById('navBar').offsetHeight
			})
			
			$("#navBarCollapsibleOptions li:nth-child(" + (i+1) + ")").click(function(e) {
				e.preventDefault();
				// console.log(i + " " + idSection);
				$('html,body').animate({
					scrollTop: $("#" + idSection ).offset().top},
					'slow');
			});
		})(i, idSection);
	}

	var bannerHeight = document.getElementById('banner').offsetHeight,
		navBarHeight = document.getElementById('navBar').offsetHeight;
		
		
	if ($(document).scrollTop() < bannerHeight - navBarHeight/2) {
		$("#navBar").removeClass("greenNavBar");	
		$("#navBar").addClass("whiteNavBar");	
	}
		
	// TODO: Optimize smoother transition
	$(window).scroll(function() {
		var st = $(document).scrollTop();
		if (st >= bannerHeight - navBarHeight/2) {
			$("#navBar").removeClass("whiteNavBar");
			$("#navBar").addClass("greenNavBar");	
			
			
		} else {
			$("#navBar").removeClass("greenNavBar");
			$("#navBar").addClass("whiteNavBar");
			
			
		}
	});
});