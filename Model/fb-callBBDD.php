<?php 		
	session_start();
	
	chdir('../');

	require "Controller/Config.php";	
	
	try {
		$accessToken = $helper->getAccessToken();
	} catch (\Facebook\Exceptions\FacebookResponseException $e) {
		echo "Response Exception: " . $e->getMessage();
		exit();
	}catch  (\Facebook\Exceptions\FacebookSDKException $e){
		echo "SDK Exception: " . $e->getMessage();
		exit();
	}

	if (!$accessToken) {
		header('location: ../View/ProfileUser.php');
		exit();
	}

	$oAuth2Client = $FB->getOAuth2Client();
	if (!$accessToken->isLongLived()) {
		$accessToken=$oAuth2Client->getLongLivedAccessToken($accessToken);
	}
	$response = $FB->get($endpoint = "/me?fields=id,first_name, last_name, picture.height(200).width(200), name, email", $accessToken);
	$userData= $response->getGraphNode()->asArray();
	$_SESSION['userData'] = $userData;
	$_SESSION['acces_token']=(string) $accessToken;
	header('location: ../View/ProfileUser.php');
	
	exit();
 ?>