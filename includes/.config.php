<?php

	//Database Information - START
		define('DB_HOST','ENTER HOST NAME HERE'); 		// Set Host here.
		define('DB_NAME','ENTER DATABASE NAME HERE'); 	// Set Database Name here.
		define('DB_USER','ENTER USER NAME HERE');  			// Set User here. 
		define('DB_PASSWORD','ENTER PASSWORD HERE'); 		// Set Password here.
	//Database Information - END

	defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);
	defined("INCLUDES_FOLDER_ROOTPATH") ? null : 
		define("INCLUDES_FOLDER_ROOTPATH", __DIR__.DS);
	define("OOP_ROOTPATH", INCLUDES_FOLDER_ROOTPATH."oop".DS);
?>