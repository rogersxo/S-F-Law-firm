<?php 
if (isset($_GET['posting'])) {
require_once("includes/session.php"); 
require_once("includes/get_sel_db.php"); 
require_once("includes/functions.php"); 
}
else
{
require_once("session.php"); 
require_once("get_sel_db.php"); 
require_once("functions.php");
}
?>

<?php

if (isset($_GET['posting'])) {
	$password = mysql_prep($_POST['pass']);
	 $username = mysql_prep($_POST['user']);
	 }
	else  {
	 $password=$_GET['pass'];
	 $username=$_GET['user'];
	 }

$result_set = query("SELECT * FROM users WHERE login = '{$username}' AND password = '{$password}' LIMIT 1");

if  ((mysql_num_rows($result_set)) == 1) 
	{
		// username/password authenticated
		// and only 1 match
		$found_user = mysql_fetch_array($result_set);
		$_SESSION['logged_in_user_id'] = $found_user['id'];
		$_SESSION['logged_in_user_name'] = $found_user['name'];
		$_SESSION['logged_in_user_login'] = $found_user['login'];
		$_SESSION['logged_in_user_status'] = $found_user['type'];
		
		$name = $found_user['name'];
		
		if ($found_user['type'] == "student") $_SESSION['logged_in_user_id'] = $found_user['sid']; 
		
		//$message = "Welcome. You are now logged into our system.";
		if (isset($_GET['message'])) { $message = $_GET['message']; } else {$message = "Welcome to your profile.";}
		
		if ($found_user['type'] == "student") 
			{
			// make notes entry....
				// makeLogEntry("sid",$_SESSION['logged_in_user_id'], $_SESSION['logged_in_user_id'], "Job Seeker logged into system via website.");
				
				// redirect to appropriate page
			if (isset($_GET['posting'])) print "<meta http-equiv=\"refresh\" content=\"0;URL=?page=student&message={$message}\">"; 
			else print "<meta http-equiv=\"refresh\" content=\"0;URL=../?page=student&message={$message}\">";
			}
				else //if admin, officer or clerk
					{ 
					 // make notes entry....
						//makeLogEntry("eid",$_SESSION['logged_in_user_id'], $_SESSION['logged_in_user_id'], "Employer logged into system via website.");
						
						// redirect to appropriate page 
					  print "<meta http-equiv=\"refresh\" content=\"0;URL=admin/\">"; 
					}
	 } else 
	{
		// username/password combo was not found in the database
		$message = "Username/password combination incorrect. Please review your information and try again.";
		print "<meta http-equiv=\"refresh\" content=\"0;URL=?message={$message}\">";
	}

?>
