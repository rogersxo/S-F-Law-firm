<?php
require("constants.php");
	//connecting to a database involves 5 steps.
	// 1. Create a database connection
	//		(Use your own servername, username and password if they are different.)
	//		$connection allows us to keep refering to this connection after it is established
	//echo "punkin man";
	$connection = @mysql_connect(DB_SERVER,DB_USER,DB_PASSWORD); 
	if (!$connection) {
		die("Database connection failed: " . mysql_error());
	}
		
	// 2. Select a database
	// 2. Select a database to use 
	$db_select = mysql_select_db(DB_NAME,$connection);
	if (!$db_select) {
		die("Database selection failed: " . mysql_error());
	}

	// 3. Perform database query
	// 4. Use Returned Data
	// 5. Close connection 

?>