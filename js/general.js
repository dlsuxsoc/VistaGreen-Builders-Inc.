
$(document).ready(function(){
	var pathName = window.location.pathname;
	var origin = window.location.origin;
	// var assetsUrl = assetsPath.path;
	
	if(origin.includes("localhost"))
		origin += "/wordpress";
	
	// VBI PAGE
	if(pathName.includes("index.php/vbi")) { 
		$("#navBarCollapsibleOptions ul").append(
			'<li class="nav-item"><a class="nav-link"' + 
			'	href="' + origin + '/index.php/vbi/#aboutSection"><b>ABOUT</b></a></li>' +
			'<li class="nav-item"><a class="nav-link"' +
			'	href="' + origin + '/index.php/vbi/#lineOfBusinessSection"><b>LINE OF BUSINESS</b></a></li>' +
			'<li class="nav-item"><a class="nav-link"' +
			'	href="' + origin + '/index.php/vbi/projects"><b>PROJECTS</b></a></li>' +
			'<li class="nav-item"><a class="nav-link"' +
			'	href="' + origin + '/index.php/vbi/#contactUsSection"><b>CONTACT US</b></a></li>' + 
			'<li class="nav-item"><a class="nav-link"' +
			'	href="' + origin + '/index.php/vbi/careers">' + 
			'<b>CAREERS</b></a></li>')
		$("#navBar > .container").prepend('<a class="navbar-brand" href="' + 
										   pathName.slice(0, pathName.indexOf("/vbi/") + 3) + '">' +
										   '	<img alt = "" width = "250px" ' +
										   '		 src="' + assetsPath +
										   '/images/new-logos/vbi-logo.png" al/></a>');
										   
		$("#missionContent").append('By promoting sustainable products and<br>' +
									'services, VistaGreen Builders Inc. will<br>' +
									'continue to the improvement of efficient<br>' +
									'and effective construction practices.');
									
		$("#visionContent").append('To be the construction<br>' + 
								   'firm of choice in providing<br>' +
								   'excellent quality services');
								   
		$("#mainAddressContent").append('<br>' +
										'Unit A2 Guevent Building, <br>' +
										'90 DM Guevara St.<br>' +
										'Mandaluyong City,<br>' +
										'Philippines');
										
		$("#emailContent").append('projects@vistagreen.net <br>' +
								  'vistagreenbuildersinc@yahoo.com <br>' +
								  'vbi.engineering@yahoo.com <br>');
								  
		$("#fbLinkContent").attr("href", "https://www.facebook.com/VistagreenBuildersInc/");
		$("#fbLinkContent").append('<p><br>Vistagreen Builders Inc.</p>');
		
	// VC PAGE
	} else if(pathName.includes("index.php/vc/")) {	
		$("#navBarCollapsibleOptions ul").append(
			'<li class="nav-item"><a class="nav-link"' + 
			'	href="' + origin + '/index.php/vc/#aboutSection"><b>ABOUT</b></a></li>' +
			'<li class="nav-item"><a class="nav-link"' +
			'	href="' + origin + '/index.php/vc/projects"><b>PROJECTS</b></a></li>' +
			'<li class="nav-item"><a class="nav-link"' +
			'	href="' + origin + '/index.php/vc/#contactUsSection"><b>CONTACT US</b></a></li>' + 
			'<li class="nav-item"><a class="nav-link"' +
			'	href="' + origin + '/index.php/vc/careers">' + 
			'<b>CAREERS</b></a></li>')
			
		$("#navBar > .container").prepend('<a class="navbar-brand" href="' + 
										   pathName.slice(0, pathName.indexOf("/vc/") + 3) + '">' +
										   '	<img alt = "" width = "250px" ' +
										   '		 src="' + assetsPath +
										   '/images/new-logos/vistacorp-logo-2.png" al/></a>');
		
		$("#missionContent").append('Committed to draw on senior expertise<br>' +
									'in environmentally conscious engineering.');
									
		$("#visionContent").append('To be the leading provider of innovative<br>' + 
								   'and sustainable technologies<br>' +
								   'in the Philippines');
								   
		$("#mainAddressContent").append('<br>' +
										'Unit B2 Guevent Building, <br>' +
										'90 DM Guevara St.<br>' +
										'Mandaluyong City,<br>' +
										'Philippines');
										
		$("#emailContent").append('wte@vistagreen.net <br>');
		
		$("#fbLinkContent").attr("href", "https://www.facebook.com/VistaCorp/");
		$("#fbLinkContent").append('<p><br>Vistagreen Waste-to-Energy</p>');
    
	// Index or Home Page
	} else {	
		$("footer").remove();
		$("nav").remove();
		$("#map").remove();
	} 
	
	// VBI & VC PAGE
	if((pathName.includes("index.php/vbi") || pathName.includes("index.php/vc")) &&
		// Add the internal pages here (e.g. vbi/projects)
	   !(pathName.includes("/projects") || pathName.includes("/careers") || 
		 pathName.includes("/accreditations"))) {		
		var items = document.getElementsByClassName("navOptionsSection");
		var i, idSection;
		for (i = 0; i < items.length; i++) {	
			idSection = items[i].id;
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
	}
	
});