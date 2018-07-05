<?php  
$array_ini = parse_ini_file("../config.ini", true);
foreach ($array_ini as $key => $value) {	
	if($key=='DB_USER'){
		define('DB_USER', $value);
	}
	if($key=='DB_PASSWORD'){
		define('DB_PASSWORD', $value);
	}
	if($key=='DB_NAME'){
		define('DB_NAME', $value);
	}
	if($key=='DB_HOST'){
		define('DB_HOST', $value);		
	}
	if($key=='DB_CHARSET'){
		define('DB_CHARSET', $value);
	}
}
?>