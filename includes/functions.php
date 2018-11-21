<?php //function
require_once("get_sel_db.php");	
		function mysql_prep( $value ) {
		$magic_quotes_active = get_magic_quotes_gpc();
		$new_enough_php = function_exists( "mysql_real_escape_string" ); // i.e. PHP >= v4.3.0
		if( $new_enough_php ) { // PHP v4.3.0 or higher
			// undo any magic quote effects so mysql_real_escape_string can do the work
			if( $magic_quotes_active ) { $value = stripslashes( $value ); }
			$value = mysql_real_escape_string( $value );
		} else { // before PHP v4.3.0
			// if magic quotes aren't already on then add slashes manually
			if( !$magic_quotes_active ) { $value = addslashes( $value ); }
			// if magic quotes are active, then the slashes already exist
		}
		return $value;
	}
	
	function daysDifference($endDate, $beginDate)
		{
		   //explode the date by "-" and storing to array
		   $date_parts1=explode("-", $beginDate);
		   $date_parts2=explode("-", $endDate);
		   //gregoriantojd() Converts a Gregorian date to Julian Day Count
		   $start_date=gregoriantojd($date_parts1[1], $date_parts1[2], $date_parts1[0]);
		   $end_date=gregoriantojd($date_parts2[1], $date_parts2[2], $date_parts2[0]);
		   $days = $end_date - $start_date;
		   //yyears
		   if ($days > 365) {
		   $years = round($days/365);
		   echo $years . "Yrs ";
		   $days = $days - ($years * 365);
		   }
		   // months
		   if ($days > 30) {
		   $months = round($days/30);
		   echo $months . "Mths ";
		   $days = $days - ($months * 30);
		   }
		   // days
		   if ($days > 0) echo $days . "Days";
		}
	
	function redirect_to($location = NULL) {
	if ($location != NULL) {header("Location: {$location}");
			exit;
		}
	}
	
	function get_password($len = 6)
	{
		$r = '';
		for($i=0; $i<$len; $i++)
			$r .= chr(rand(0, 25) + ord('a'));
		return $r;
	}
	
	function formatMySqlDate($date) {
	return date("Y-m-d", strtotime($date));
	}
	
	function query($query) {
	require_once("get_sel_db.php");
	$success = mysql_query($query);
	if (!$success) {
		die("Database query failed: " . mysql_error());
	}
	return $success;
	}
	
	function query2($query) {
	require_once("get_sel_db.php");
	$success = mysql_query($query);
	if (!$success) {
		die("Database query failed: " . mysql_error());
	}
	$success = mysql_fetch_array($success);
	return $success;
	}
	
	function getAgeGroupCount($ageStart, $ageStop, $gender, $course, $centre, $disab, $realstart, $realstop){
		if(($course == "All") && ($centre == "All")) {
		if ($gender == "m") {
		if ($disab == '0') $tot = query2("SELECT COUNT(otherdisability) AS total FROM (students JOIN (SELECT sid, date FROM `registered_courses` WHERE date BETWEEN '{$realstart}' AND '{$realstop}') AS level1 ON students.id = level1.sid) WHERE otherdisability != '' AND title = 'Mr.' AND (((YEAR(date) - YEAR(dob)) > '{$ageStart}') AND ((YEAR(date) - YEAR(dob)) < '{$ageStop}'))");
		else $tot = query2("SELECT Count(title) as total FROM (have_disability JOIN (SELECT id,title,dob, level1.date FROM (students JOIN (SELECT sid, date FROM `registered_courses` WHERE date BETWEEN '{$realstart}' AND '{$realstop}') AS level1 ON students.id = level1.sid)) AS level2 ON have_disability.sid = level2.id) WHERE did='{$disab}' AND title = 'Mr.' AND (((YEAR(date) - YEAR(dob)) > '{$ageStart}') AND ((YEAR(date) - YEAR(dob)) < '{$ageStop}'))"); 	
		}
		else { 
		if ($disab == '0') $tot = query2("SELECT COUNT(otherdisability) AS total FROM (students JOIN (SELECT sid, date FROM `registered_courses` WHERE date BETWEEN '{$realstart}' AND '{$realstop}') AS level1 ON students.id = level1.sid) WHERE otherdisability != '' AND (title = 'Ms.' OR title = 'Mrs.') AND (((YEAR(date) - YEAR(dob)) > '{$ageStart}') AND ((YEAR(date) - YEAR(dob)) < '{$ageStop}'))");	
		else $tot = query2("SELECT Count(title) as total FROM (have_disability JOIN (SELECT id,title,dob, level1.date FROM (students JOIN (SELECT sid, date FROM `registered_courses` WHERE date BETWEEN '{$realstart}' AND '{$realstop}') AS level1 ON students.id = level1.sid)) AS level2 ON have_disability.sid = level2.id) WHERE did='{$disab}' AND (title = 'Ms.' OR title = 'Mrs.') AND (((YEAR(date) - YEAR(dob)) > '{$ageStart}') AND ((YEAR(date) - YEAR(dob)) < '{$ageStop}'))"); 
		}
		}
		else if(($course == "All") && ($centre != "All")) {
		if ($gender == "m") {
		if ($disab == '0') $tot = query2("SELECT COUNT(otherdisability) AS total FROM (students JOIN (SELECT sid, date FROM `registered_courses` WHERE date BETWEEN '{$realstart}' AND '{$realstop}') AS level1 ON students.id = level1.sid) WHERE otherdisability != '' AND title = 'Mr.' AND (((YEAR(date) - YEAR(dob)) > '{$ageStart}') AND ((YEAR(date) - YEAR(dob)) < '{$ageStop}')) AND centre = '{$centre}'");
		else $tot = query2("SELECT Count(title) as total FROM (have_disability JOIN (SELECT id,title,dob, level1.date, centre FROM (students JOIN (SELECT sid, date FROM `registered_courses` WHERE date BETWEEN '{$realstart}' AND '{$realstop}') AS level1 ON students.id = level1.sid)) AS level2 ON have_disability.sid = level2.id) WHERE did='{$disab}' AND title = 'Mr.' AND (((YEAR(date) - YEAR(dob)) > '{$ageStart}') AND ((YEAR(date) - YEAR(dob)) < '{$ageStop}')) AND centre = '{$centre}'"); 
		}
		else { 
		if ($disab == '0') $tot = query2("SELECT COUNT(otherdisability) AS total FROM (students JOIN (SELECT sid, date FROM `registered_courses` WHERE date BETWEEN '{$realstart}' AND '{$realstop}') AS level1 ON students.id = level1.sid) WHERE otherdisability != '' AND (title = 'Ms.' OR title = 'Mrs.') AND (((YEAR(date) - YEAR(dob)) > '{$ageStart}') AND ((YEAR(date) - YEAR(dob)) < '{$ageStop}')) AND centre = '{$centre}'");
		else $tot = query2("SELECT Count(title) as total FROM (have_disability JOIN (SELECT id,title,dob, level1.date, centre FROM (students JOIN (SELECT sid, date FROM `registered_courses` WHERE date BETWEEN '{$realstart}' AND '{$realstop}') AS level1 ON students.id = level1.sid)) AS level2 ON have_disability.sid = level2.id) WHERE did='{$disab}' AND (title = 'Ms.' OR title = 'Mrs.') AND (((YEAR(date) - YEAR(dob)) > '{$ageStart}') AND ((YEAR(date) - YEAR(dob)) < '{$ageStop}')) AND centre = '{$centre}'"); 
			}
		}
		else if(($course != "All") && ($centre == "All")) {
		if ($gender == "m") {
		if ($disab == '0') $tot = query2("SELECT COUNT(otherdisability) AS total FROM (students JOIN (SELECT sid, date, cid FROM `registered_courses` WHERE date BETWEEN '{$realstart}' AND '{$realstop}' AND cid='{$course}') AS level1 ON students.id = level1.sid) WHERE otherdisability != '' AND title = 'Mr.' AND (((YEAR(date) - YEAR(dob)) > '{$ageStart}') AND ((YEAR(date) - YEAR(dob)) < '{$ageStop}'))");
		else $tot = query2("SELECT Count(title) as total FROM (have_disability JOIN (SELECT id,title,dob, level1.date, centre, cid FROM (students JOIN (SELECT sid, date, cid FROM `registered_courses` WHERE date BETWEEN '{$realstart}' AND '{$realstop}') AS level1 ON students.id = level1.sid)) AS level2 ON have_disability.sid = level2.id) WHERE did='{$disab}' AND title = 'Mr.' AND (((YEAR(date) - YEAR(dob)) > '{$ageStart}') AND ((YEAR(date) - YEAR(dob)) < '{$ageStop}')) AND cid = '{$course}'"); 
		}
		else { 
		if ($disab == '0') $tot = query2("SELECT COUNT(otherdisability) AS total FROM (students JOIN (SELECT sid, date, cid FROM `registered_courses` WHERE date BETWEEN '{$realstart}' AND '{$realstop}' AND cid='{$course}') AS level1 ON students.id = level1.sid) WHERE otherdisability != '' AND (title = 'Ms.' OR title = 'Mrs.') AND (((YEAR(date) - YEAR(dob)) > '{$ageStart}') AND ((YEAR(date) - YEAR(dob)) < '{$ageStop}'))");
		else $tot = query2("SELECT Count(title) as total FROM (have_disability JOIN (SELECT id,title,dob, level1.date, centre, cid FROM (students JOIN (SELECT sid, date, cid FROM `registered_courses` WHERE date BETWEEN '{$realstart}' AND '{$realstop}') AS level1 ON students.id = level1.sid)) AS level2 ON have_disability.sid = level2.id) WHERE did='{$disab}' AND (title = 'Ms.' OR title = 'Mrs.') AND (((YEAR(date) - YEAR(dob)) > '{$ageStart}') AND ((YEAR(date) - YEAR(dob)) < '{$ageStop}')) AND cid = '{$course}'"); 
		}
		}
		else {
		if ($gender == "m") {
		if ($disab == '0') $tot = query2("SELECT COUNT(otherdisability) AS total FROM (students JOIN (SELECT sid, date, cid FROM `registered_courses` WHERE date BETWEEN '{$realstart}' AND '{$realstop}' AND cid='{$course}') AS level1 ON students.id = level1.sid) WHERE otherdisability != '' AND title = 'Mr.' AND (((YEAR(date) - YEAR(dob)) > '{$ageStart}') AND ((YEAR(date) - YEAR(dob)) < '{$ageStop}')) AND centre = '{$centre}'");
		else $tot = query2("SELECT Count(title) as total FROM (have_disability JOIN (SELECT id,title,dob, level1.date, centre, cid FROM (students JOIN (SELECT sid, date, cid FROM `registered_courses` WHERE date BETWEEN '{$realstart}' AND '{$realstop}') AS level1 ON students.id = level1.sid)) AS level2 ON have_disability.sid = level2.id) WHERE did='{$disab}' AND title = 'Mr.' AND (((YEAR(date) - YEAR(dob)) > '{$ageStart}') AND ((YEAR(date) - YEAR(dob)) < '{$ageStop}')) AND (cid = '{$course}') AND (centre = '{$centre}')"); }
		else { 
		if ($disab == '0') $tot = query2("SELECT COUNT(otherdisability) AS total FROM (students JOIN (SELECT sid, date, cid FROM `registered_courses` WHERE date BETWEEN '{$realstart}' AND '{$realstop}' AND cid='{$course}') AS level1 ON students.id = level1.sid) WHERE otherdisability != '' AND (title = 'Ms.' OR title = 'Mrs.') AND (((YEAR(date) - YEAR(dob)) > '{$ageStart}') AND ((YEAR(date) - YEAR(dob)) < '{$ageStop}')) AND centre = '{$centre}'");
		else $tot = query2("SELECT Count(title) as total FROM (have_disability JOIN (SELECT id,title,dob, level1.date, centre, cid FROM (students JOIN (SELECT sid, date, cid FROM `registered_courses` WHERE date BETWEEN '{$realstart}' AND '{$realstop}') AS level1 ON students.id = level1.sid)) AS level2 ON have_disability.sid = level2.id) WHERE did='{$disab}' AND (title = 'Ms.' OR title = 'Mrs.') AND (((YEAR(date) - YEAR(dob)) > '{$ageStart}') AND ((YEAR(date) - YEAR(dob)) < '{$ageStop}')) AND (cid = '{$course}') AND (centre = '{$centre}')"); }
		}
		$total = $tot['total'];
		return $total;
	}
	
	function sendEmail($firstname, $lastname, $email, $password)
	{
	$name = $firstname . " " . $lastname;
		// prepare email body text
	$Body = "Dear {$name}\n\n";
	$Body .= "Your login information has been updated by our web-administrator at (www.idceug.com). \n\nYour access information:";
	$Body .= "\n\n";
	$Body .= "Email/Login: ";
	$Body .= $email;
	$Body .= "\n";
	$Body .= "Password: ";
	$Body .= $password;
	$Body .= "\n \n";
	$Body .= "Registration Center \nUniversity of Guyana - Institute of Distance & Continuing Education \nTel: 227-0407  \nEMail: info@idceug.com";
	
	$subject = "Login information changed - IDCE University of Guyana";
	$success = mail($email, $subject, $Body, "From: <info@idceug.com>"); 
	
	}
	
 function birthday ($birthday)
  {
    list($year,$month,$day) = explode("-",$birthday);
    $year_diff  = date("Y") - $year;
    $month_diff = date("m") - $month;
    $day_diff   = date("d") - $day;
    if ($month_diff < 0) $year_diff--;
    elseif (($month_diff==0) && ($day_diff < 0)) $year_diff--;
    return $year_diff;
  }

?>
