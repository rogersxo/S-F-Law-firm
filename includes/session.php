<?php require_once("functions.php"); ?>
<?php session_start();
	
	function logged_in() {
		return isset($_SESSION['logged_in_user_id']);
	}
	
	function confirm_logged_in() {
		if (!logged_in()) {
			redirect_to("?");
			//Header( "Location: index.php" );
		}
	}
	function logged_in_administer() {
		if ((isset($_SESSION['logged_in_user_status'])) && ($_SESSION['logged_in_user_status'] == "admin") || ($_SESSION['logged_in_user_status'] == "officer") || ($_SESSION['logged_in_user_status'] == "clerk"))
		return isset($_SESSION['logged_in_user_id']);
	}
	
	function confirm_logged_in_administer() {
		if (!logged_in_administer()) {
			redirect_to("../?");
			//Header( "Location: index.php" );
		}
	}
	
?>
