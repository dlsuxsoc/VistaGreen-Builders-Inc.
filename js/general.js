
$(document).ready(function(){
	var pathName = window.location.pathname;
	var origin = window.location.origin;
	// var assetsUrl = assetsPath.path;
	
	if(pathName.includes("index.php/vbi")) {
		$("#navBarCollapsibleOptions ul").append(
			'<li class="nav-item"><a class="nav-link"' + 
			'	href="<?php echo(site_url()) ?>/index.php/vbi/#aboutSection"><b>ABOUT</b></a></li>' +
			'<li class="nav-item"><a class="nav-link"' +
			'	href="<?php echo(site_url()) ?>/index.php/vbi/#lineOfBusinessSection"><b>LINE OF BUSINESS</b></a></li>' +
			'<li class="nav-item"><a class="nav-link"' +
			'	href="<?php echo(site_url()) ?>/index.php/vbi/#projectsSection"><b>PROJECTS</b></a></li>' +
			'<li class="nav-item"><a class="nav-link"' +
			'	href="<?php echo(site_url()) ?>/index.php/vbi/#contactUsSection"><b>CONTACT US</b></a></li>')
		$("#navBar > .container").prepend('<a class="navbar-brand" href="' + origin + 
										   pathName.slice(0, pathName.indexOf("/vbi/") + 3) + '">' +
										   '	<img alt = "" width = "250px" ' +
										   '		 src="' + assetsPath +
										   '/images/vg-logo.png" al/></a>');
	} else if(pathName.includes("index.php/vc/")) {
		$("#navBar > .container").prepend('<a class="navbar-brand" href="' + origin + 
										   pathName.slice(0, pathName.indexOf("/vc/") + 3) + '">' +
										   '	<img alt = "" width = "250px" ' +
										   '		 src="' + assetsPath +
										   '/images/new-logos/vistacorp-logo-2.png" al/></a>');
	} else {	// Index or Home Page
		$("footer").remove();
		$("nav").remove();
		$("#map").remove();
	} 
	
});