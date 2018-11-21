<?php require_once("get_sel_db.php"); ?>
<?php //function
	
	function getClass($code)
	{
		$query="SELECT * FROM jcl4 WHERE code = '{$code}' LIMIT 1";
		$result = mysql_query($query, $connection);
		if (!$result) {
			die("Database query failed: " . mysql_error());
		}
		$deClass = mysql_fetch_array($result);
		echo $deClass['class'];
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
	
?>
<?php require_once("close_db.php"); ?>