<?php 
	session_start();
	
	$array_ini = parse_ini_file("config.ini", true);
	foreach ($array_ini as $key => $value) {				
		if($key=='URL'){
			define('URL', $value);
		}
	}
	require "Controller/Config.php";	
	require "Facebook/autoload.php";
	//$redirecURL="http://localhost/ejercicios/RetrieveUserProfileFacebook/Model/fb-callBBDD.php";
	$redirecURL=URL;
	$permissions=['email'];
	$loginURL = $helper->getLoginUrl($redirecURL, $permissions);	
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>

<body>	
	<div class="container" style="margin-top: 50px">	
		<div class="row justify-content-center" >
			 <div class="col-md-4 border border-success col-md-offset-4" align="center"> 
				<h1>Welcome</h1>
				<h6>register and know our products</h6><br>
				<form>
					<input name="email" placeholder="Email" class="form-control"><br>
					<input name="password" placeholder="password" class="form-control"><br>
					<input type="submit" value="Continue" class="btn btn-success btn-block" >
					<h3><br>or<br><br></h3>
					<input type="button" onclick="window.location='<?php echo($loginURL) ?>'" value="Continue with Facebook" class="btn btn-primary btn-block"><br>
					<input type="submit" value="Continue with Google" class="btn btn-danger btn-block"><br>
				</form>
		</div>		
	</div>
</body>
</html>