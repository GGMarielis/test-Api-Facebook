<?php  	
	$array_ini = parse_ini_file("config.ini", true);
	foreach ($array_ini as $key => $value) {		
		if($key=='app_id'){					
			$id = $value;				
		}
		if($key=='app_secret'){
			$secret = $value;									
		}
	}	
	require "Facebook/autoload.php";	
	
	$FB = new \Facebook\Facebook([
		'app_id' => $id,
        'app_secret' => $secret,
        'default_graph_version' => 'v2.10',
	]);
	$helper = $FB->getRedirectLoginHelper();

?>