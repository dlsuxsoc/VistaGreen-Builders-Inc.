<?php
	require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-config.php' );
	require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-includes/wp-db.php' );
	global $wpdb;
	
	$message = "a";
	echo $message;
	
	if (isset($_POST['action'])) {
		switch ($_POST['action']) {
			// case 'contactUsForm':
				// $name  	 = $_POST['name'];
				// $email   = $_POST['email'];
				// $phone   = $_POST['phone'];
				// $message = $_POST['message'];
				
				// if($wpdb -> insert('contactus', array(
				   // 'name'  => $name,  'email'   => $email,
				   // 'phone' => $phone, 'message' => $message)) == false){
					// $message ='Database Insertion Failed';
					// wp_die();
			    // }
				// else $message = 'Database insertion successful';
				// break;
				
			default: echo "Error: Invalid action data being passed in AJAX (CHECK JS)";
					 break;
		}
		echo $message;
	} else if (isset($_GET['action'])) {
		switch ($_GET['action']) {
			// case 'browseCasePicLoadMore': 
					// $result = $wpdb->get_results ( "SELECT * FROM casedetails ".
												   // "WHERE status = 'unsolved' ORDER BY id ".
												   // "LIMIT ".$_GET['currentIndex'].", 8", ARRAY_A);
					// $htmlSnippet = "";
					// $currentIndex = $_GET['currentIndex'];
					
					// foreach($result as $row){
						// $src = "http://wordpress.local/wordpress/5-specific-case?caseNumber={$row['id']}";
						// $currentIndex += 1;
						// $htmlSnippet .= 
										// '<div class="col-sm-3 offset-sm-1 pic-div">
											// <a href = "'.$src.'">
												// <img class="img-responsive" src="../wp-content/themes/missingPersons/images/icon.png">
												// <p id="nameloc" class="maintext">'.$row['fName'].' '.$row['lName'].', '.
												// $row['lastlocation'].'</p>
												// <p id="date" class="subtext">Last seen: '.$row['lastseen'].'</p>
											// </a>
										// </div>';
					// }
					// echo $htmlSnippet.";".$currentIndex;
					// break;
					 
			default: echo "Error: Invalid action data being passed in AJAX (CHECK JS)";
					 break;
			
		}
		
	}



?>
