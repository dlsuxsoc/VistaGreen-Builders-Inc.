
<?php
	/* Template Name: vc
	 */
	get_header();
?>

	
	<div class="text-center container-fluid" id = "vcBody">
		<div class = 'block navOptionsSection' id = "aboutSection">
			<img src="<?php echo ASSETS_PATH; ?>/images/new-logos/vistacorp-logo-2.png" alt="VistaGreen CORPORATION" width = "500px"/>
			<br>
			<p>introduces in the Philippines a</p> <br>
			<h2 class = "text-success"><strong>Waste-To-Energy (WTE) <br> Pyrolysis / Gasification <br>
				Technology</strong></h2> <br>
			<h3><strong>Modular Catalytic gasification waste parocessing plants, <br>
				from 50 tons to 500 tons per day capacity, Clean-tech, <br>
				water-free processing system</strong></h3>
			
			<p>that eliminates the need for additional dumpsites/landfills</p>
		
        
            <div class ='block container' id = 'obtion2Section'>

                <div class = 'row'>				
                    <div class="col-lg-6">
                        <img src="<?php echo ASSETS_PATH; ?>/icons/drops.png" alt="" width = "200px"/>						
                        <h3 class = "text-success"><strong>Water Processing Plant<br>
                            (WPP)</strong></h3>
                        
                        12 to 18 months in initial operational phase <br><br>
                        Initial installation of 50 T/day, completion to <br>
                        be scheduled <br><br>
                        Chemical and Laboratory on-site <br><br>
                        Emission-free <br><br>
                        Fully compliant with EU Standards on <br>
                        Emission limits for 2030
                    </div>
                                    
                    <div class="col-lg-6">
                        <img src="<?php echo ASSETS_PATH; ?>/icons/wind.png" alt="" width = "200px"/>						
                        <h3 class = "text-success"><strong>Advanced Thermal<br>
                            Residual Waste Treatment</strong></h3>
                        
                        Additional Segregation <br>
                        (Automatic and/or Manual) <br><br><br>
                        <strong>PYROLYSIS of Remaining Waste after Segregation: </strong><br><br>
                        Preparation of the waste feedstock <br>
                        Heating the waste, 400 - 600 C <br>
                        Scrubbing (Purifying) the gas <br>
                        Cooling gas into petroleum products
                    </div>
                </div>	

            <!-- 
                <br><br>
                <a href = "<?php echo(site_url()) ?>/index.php/vc/projects/"><button type="button" class="btn btn-success" 
                        id = "viewProjectsButton">VIEW MORE</button></a>
            -->
            </div>

        </div>
    </div>
	
	<?php
		include "missionSnippet.php";
	?>	
	
<?php
	get_footer();
?>
